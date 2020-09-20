<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\Candidature;
use App\Etudiant;
use App\Etablissement;
use App\Formation;
use App\Diplome;


class CandidatureController extends Controller
{
    /**
     * Show the canidature preview.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function voirDossierCandidature($id)
    {   
        // the current auth is etablissement or admin
        
        $user = Auth::user();

        if ($user->typeCompte == 'ADMIN' || $user->typeCompte == 'ETABLISSEMENT') {

            // $candidature = Candidature::findOrFail($id);

            // get candidature fields:

            $query = Candidature::where('candidatures.id', $id);

            // Join to the formation to get the associated formation columns
            $query = $query->leftJoin('formations', 'formations.id', 'candidatures.formation_id');

            // Join to the diplome to get the associated diplome columns
            $query = $query->leftJoin('diplomes', 'diplomes.id', 'candidatures.diplome_id');

            // Join to the etablissement to get the associated etablissement columns
            $query = $query->leftJoin('etablissements', 'etablissements.id', 'candidatures.etablissement_id');
            
            // define fields to select
            $query->select('candidatures.*','formations.intitule_filiere as intitule_filiere', 'diplomes.niveau as diplome_niveau', 'diplomes.intitule as diplome_intitule', 'etablissements.sigle as etablissement_sigle', 'etablissements.nom as etablissement_nom','etablissements.pays as etablissement_pays','etablissements.ville as etablissement_ville');

            $candidature = $query->first();

            $etudiant = Etudiant::findOrFail($candidature->etudiant_id);

            $parentsEtudiant = $etudiant->parentsEtudiant;
            $educationsExperiencesEtudiant = $etudiant->educationsExperiencesEtudiant;
            $aProposEtudiant = $etudiant->aProposEtudiant;
            $documentsEtudiant = $etudiant->documentsEtudiant;

            return view('voirDossierCandidature', [
                'candidature' => $candidature,
                'etudiant' => $etudiant,
                'parentsEtudiant' => $parentsEtudiant,
                'educationsExperiencesEtudiant' => $educationsExperiencesEtudiant,
                'aProposEtudiant' => $aProposEtudiant,
                'documentsEtudiant' => $documentsEtudiant,
            ]);

        } else {
            Auth::logout();
            abort(403, 'Authorization error : Vous ne pouvez pas éffectuer cette action');
        }
    }
    
}
