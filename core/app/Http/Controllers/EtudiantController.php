<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// To log some usefull step
use Log;

use App\Formation;
use App\Candidature;
use App\ParentsEtudiant;
use App\EducationsExperiencesEtudiant;
use App\AProposEtudiant;

class EtudiantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the etudiant selection formation wizard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function selectionFormations()
    {   
        $user = Auth::user();

        return view('etudiant.selectionFormations');
    }

     /**
     * Show the etudiant candidatures view
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function candidatures()
    {   
        $etudiant = Auth::user()->etudiant;

        $query = Candidature::where('etudiant_id', '=', $etudiant->id);
        $limit = 20; // limits of records to retrieve

        // Join to the formation to get the associated formation columns
        $query = $query->leftJoin('formations', 'formations.id', 'candidatures.formation_id');

        // Join to the diplome to get the associated diplome columns
        $query = $query->leftJoin('diplomes', 'diplomes.id', 'candidatures.diplome_id');

        // Join to the etablissement to get the associated etablissement columns
        $query = $query->leftJoin('etablissements', 'etablissements.id', 'candidatures.etablissement_id');
        
        // define fields to select
        $query->select('candidatures.*', 'formations.intitule_filiere as intitule_filiere', 'diplomes.niveau as diplome_niveau', 'etablissements.sigle as etablissement_sigle', 'etablissements.nom as etablissement_nom','etablissements.pays as etablissement_pays','etablissements.ville as etablissement_ville');

        $query->orderBy('updated_at', 'desc');

        $query->limit($limit);

        $candidatures = $query->get();

        return view('etudiant.candidatures')->with('candidatures', $candidatures);
    }

    /**
     * Create the candidatures for the etudiant selectionformations
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inscriptionSelectionFormations()
    {   
        $etudiant = Auth::user()->etudiant;
        // the list of formation the etudiant has selected
        $selection_formations =  $etudiant->selection_formations;

        $profil_complet = $etudiant->profil_complet;
        $choix_formation = $selection_formations && count($selection_formations) != 0;

        if ($choix_formation && $profil_complet) {
            // prepare candidatures
            $candidatures = array();
            foreach($selection_formations as $selection_formation) { 
                // Check if etudiant already have a candidature for the current formation
                $existingCandidature = Candidature::where('etudiant_id', $etudiant->id)->where('formation_id', $selection_formation['id'])->first();
                if ($existingCandidature) {
                    return abort(403, 'Unauthorized action. Vous avez déja une candidature pour : '.ucwords(str_replace('_', ' ', strtolower($selection_formation['diplome_niveau']))).' | '.$selection_formation['intitule_filiere']. ' | '. $selection_formation['etablissement_sigle']. ' | '. $selection_formation['etablissement_ville']);
                } else {
                    $candidature = array(
                        'etudiant_id' => $etudiant->id,
                        'etablissement_id' => $selection_formation['etablissement_id'],
                        'formation_id' => $selection_formation['id'],
                        'diplome_id' => $selection_formation['diplome_id']
                    );
                    array_push($candidatures, $candidature);
                }
            }
            Candidature::insert($candidatures);

            // Clear etudiant selection_formations
            $etudiant->selection_formations = null;
            $etudiant->save();

            return redirect()->route('candidaturesEtudiant');
        } else {
            return abort(403, 'Unauthorized action. Veuillez completer votre dossier candidat !');
        }
    }

    /**
     * Show the etudiant dossier candidat view
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request)
    {   
        //very cool option to get the request parameter either as input or as route parameter
        $section_id = $request->section_id;

        $etudiant = Auth::user()->etudiant;

        // Make sure the null or undefined value is reset to 0 before switch
        if (!$section_id) $section_id = 0;

        switch ($section_id) {
            case 0: { // Section Infos générales
                
                return view('etudiant.dossierCandidat')->with(['section_id' => $section_id, 'etudiant' => $etudiant]);
            }
            break;
            case 1: { // Section Infos sur les parents
                $parentsEtudiant = $etudiant->parentsEtudiant;
                
                // check if the parents etudiants section has been initialized first
                if (!$parentsEtudiant) {
                    Log::info('Etudiant '.$etudiant->id.': Initialisation de la section Informations Parents');
                    $parentsEtudiant = ParentsEtudiant::create(['etudiant_id' => $etudiant->id]);
                }
                return view('etudiant.dossierCandidat')->with(['section_id' => $section_id, 'parentsEtudiant' => $parentsEtudiant]);
            }
            break;
            case 2: { // Section Education et Expérience
                $educationsExperiencesEtudiant = $etudiant->educationsExperiencesEtudiant;
                // check if the parents etudiants section has been initialized first
                if (!$educationsExperiencesEtudiant) {
                    Log::info('Etudiant '.$etudiant->id.': Initialisation de la section Etucation et Expériences');
                    $educationsExperiencesEtudiant = EducationsExperiencesEtudiant::create(['etudiant_id' => $etudiant->id]);
                }
                return view('etudiant.dossierCandidat')->with(['section_id' => $section_id, 'educationsExperiencesEtudiant' => $educationsExperiencesEtudiant]);
            }
            break;
            case 3: { // A propos
                $aProposEtudiant = $etudiant->aProposEtudiant;
                // check if the a propos etudiants section has been initialized first
                if (!$aProposEtudiant) {
                    Log::info('Etudiant '.$etudiant->id.': Initialisation de la section A Propos');
                    $aProposEtudiant = AProposEtudiant::create(['etudiant_id' => $etudiant->id]);
                }
                return view('etudiant.dossierCandidat')->with(['section_id' => $section_id,  'aProposEtudiant' => $aProposEtudiant]);
            }
            break;
            case 4: { // Section Documents
                
                return view('etudiant.dossierCandidat')->with(['section_id' => $section_id]);
            }
            break;
        
            default: { // when the given id is above 4
                // return redirect()->route('dossierCandidatEtudiant', ['section_id' => $section_id]);
                return redirect('etudiant/dossierCandidat?section_id=0');
            }
            break;
        }
        
    }

    /**
     * Update the etudiant dossier candidature section 0
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {   
        $etudiant = Auth::user()->etudiant;

        $sectionGeneral = [
            'nom', 'prenom', 'pays_residence', 'ville_residence', 'telephone',
            'type_piece_identite', 'numero_piece_identite', 'date_naissance', 'pays_naissance',
            'ville_naissance', 'nationalite', 'coordones', 'code_postal', 'adresse_postale'
        ];
        
        // Here the validations rules

        // Etudiant general informations
        if ($request->filled($sectionGeneral)) {
            
            $etudiant->update($request->only($sectionGeneral));
            
            $etudiant->section0_remplie = true;
            $etudiant->save();

            // dd($etudiant->wasChanged());

            // move to the next section
            return redirect('etudiant/dossierCandidat?section_id=1');
        
        } else {
            $etudiant->section0_remplie = false;
            $etudiant->save();
            return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);
        }

    }

    /**
     * Update the etudiant dossier candidature section 1
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeSection1(Request $request)
    {   
        $etudiant = Auth::user()->etudiant;

        $sectionFields = [
            'nom_prenom_pere', 'profession_pere', 'telephone_pere',
            'nom_prenom_mere', 'profession_mere', 'telephone_mere',
            'nom_prenom_tuteur', 'profession_tuteur', 'telephone_tuteur', 'parente_tuteur',
            'adresse_postale',
            'email'
        ];

        // Here the validations rules

        // Etudiant general informations
        if ($request->has($sectionFields)) { // changed hasFilled to has because somefields are not mandatories
            
            $etudiant->parentsEtudiant->update($request->only($sectionFields));
            $etudiant->parentsEtudiant->save();

            $etudiant->section1_remplie = true; // Profil completion check
            $etudiant->save();

            // move to the next section
            return redirect('etudiant/dossierCandidat?section_id=2');
        
        } else {
            $etudiant->section1_remplie = false;
            $etudiant->save();
            return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);
        }

    }

    /**
     * Update the etudiant dossier candidature section 2
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeSection2(Request $request)
    {
        $etudiant = Auth::user()->etudiant;

        $sectionFields = [
            'formations_recentes', 'diplomes_recents', 'experiences_professionnelles',
        ];
        
        // Here the validations rules

        // Etudiant general informations
        if ($request->hasAny($sectionFields)) { // changed hasFilled to has because somefields are not mandatories

            // filter array to remove the null placeholder hidden input, then map the array to convert each json string sent by javascript to obtain a full json object
            $formations_recentes = array_map('json_decode', array_filter($request->input('formations_recentes')));
            $diplomes_recents = array_map('json_decode', array_filter($request->input('diplomes_recents')));
            $experiences_professionnelles = array_map('json_decode', array_filter($request->input('experiences_professionnelles')));
            
            // checks if those are given
            if (!$formations_recentes || !$diplomes_recents ) return back()->withInput(); // experiences_professionnelles is not mandatory

            $etudiant->educationsExperiencesEtudiant->update([
                'formations_recentes' => $formations_recentes ? $formations_recentes : null, // to be sure that the data was changed
                'diplomes_recents' => $diplomes_recents ? $diplomes_recents : null,
                'experiences_professionnelles' => $experiences_professionnelles ? $experiences_professionnelles : null,
            ]);

            $etudiant->educationsExperiencesEtudiant->save();

            $etudiant->section2_remplie = $etudiant->educationsExperiencesEtudiant->wasChanged(); // Profil completion check
            $etudiant->save();

            // move to the next section
            return redirect('etudiant/dossierCandidat?section_id=3');
        
        } else {
            $etudiant->section2_remplie = false;
            $etudiant->save();
            return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);
        }
    }

     /**
     * Update the etudiant dossier candidature section 3
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeSection3(Request $request)
    {   
        $etudiant = Auth::user()->etudiant;

        $sectionFields = [
            'langue_arabe', 'langue_francais', 'langue_anglais', 
            'langue_espagnol', 'langue_allemand', 'langue_autres',
            'sejours_etranger', 'pays_sejours_etranger',
            'loisirs', 'sports', 'autres_activites', 'motivations_candidatures', 'projets_carriere'
        ];
        

        // Here the validations rules
        
        // Etudiant general informations
        if ($request->hasAny($sectionFields)) { // changed hasFilled to has because somefields are not mandatories

            $inputs = $request->only($sectionFields); // to merge

            if ($request->missing('langue_arabe') && $request->missing('langue_francais') && $request->missing('langue_anglais') && $request->missing('langue_espagnol') && $request->missing('langue_allemand')) return back()->withInput(); // one langage is required at least
            // dd($inputs);
            $langue_arabe = $request->has('langue_arabe') ? true : false;
            $langue_francais = $request->has('langue_francais') ? true : false;
            $langue_anglais = $request->has('langue_anglais') ? true : false;
            $langue_espagnol = $request->has('langue_espagnol') ? true : false;
            $langue_allemand = $request->has('langue_allemand') ? true : false;

            // $sejours_etranger = $request->has('sejours_etranger') ? true : false;

            $data_updates = array_merge($inputs, [
                'langue_arabe' => $langue_arabe,
                'langue_francais' => $langue_francais,
                'langue_anglais' => $langue_anglais,
                'langue_espagnol' => $langue_espagnol,
                'langue_allemand' => $langue_allemand,
            ]);

            $etudiant->aProposEtudiant->update($data_updates);
            $etudiant->aProposEtudiant->save();

            $etudiant->section3_remplie = true; // Profil completion check
            $etudiant->save();

            // move to the next section
            return redirect('etudiant/dossierCandidat?section_id=4');
        
        } else {
            $etudiant->section3_remplie = false;
            $etudiant->save();
            return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);
        }
    }
    
}
