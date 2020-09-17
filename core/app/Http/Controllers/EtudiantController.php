<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Formation;
use App\Candidature;
use App\ParentsEtudiant;

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
     * Show the etudiant formulaire candidature
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
        //very cool option to get the request parameter etheir as input or as route parameter
        $section = $request->section;

        $etudiant = Auth::user()->etudiant;

        switch ($section) {
            case 0: { // Section Infos générales
                
                return view('etudiant.dossierCandidat')->with(['section' => 0, 'etudiant' => $etudiant]);
            }
            break;
            case 1: { // Section Infos sur les parents
                $parentsEtudiant = $etudiant->parentsEtudiant;
                
                // check if the parents etudiants section has been initialized first
                if (!$parentsEtudiant) {
                    $parentsEtudiant = ParentsEtudiant::create(['etudiant_id' => $etudiant->id]);
                }
                return view('etudiant.dossierCandidat')->with(['section' => 1, 'parentsEtudiant' => $parentsEtudiant]);
            }
            break;
            case 2: { // Section Education
                
                return view('etudiant.dossierCandidat')->with(['section' => 2]);
            }
            break;
            case 3: { // Section Expérience
                
                return view('etudiant.dossierCandidat')->with(['section' => 3]);
            }
            break;
            case 4: { // A propos
                
                return view('etudiant.dossierCandidat')->with(['section' => 4]);
            }
            break;
            case 5: { // Section Documents
                
                return view('etudiant.dossierCandidat')->with(['section' => 5]);
            }
            break;
        
            default: {
                // return redirect()->route('dossierCandidatEtudiant', ['section' => 'section1']);
                return redirect('etudiant/dossierCandidat?section=0');
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
        
        // Profil completion check
        $sectionGeneralesRempli = false;
        $sectionParentsRempli = false;

        // Here the validations rules

        // Etudiant general informations
        if ($request->filled($sectionGeneral)) {
            
            $sectionGeneralesRempli = true;
            // dd($request->input());
            $etudiant->update($request->only($sectionGeneral));

            // move to the next section
            return redirect('etudiant/dossierCandidat?section=1');
        
        } else return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);

    }

    /**
     * Update the etudiant dossier candidature section 0
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
        
        // Profil completion check
        $sectionRempli = false;

        // Here the validations rules

        // Etudiant general informations
        if ($request->has($sectionFields)) { // changed hasFilled to has because somefields are not mandatories
            
            $sectionGeneralesRempli = true;
            // dd($request->input());
            $etudiant->parentsEtudiant->update($request->only($sectionFields));

            // move to the next section
            return redirect('etudiant/dossierCandidat?section=2');
        
        } else return back()->withInput(); // ->withErrors(['name.required', 'Name is required']);

    }
    
}
