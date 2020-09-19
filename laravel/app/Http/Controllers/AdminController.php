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

class AdminController extends Controller
{   /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the all the candidatures
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function candidatures()
    { 

        $query = Candidature::nonArchive();
        $limit = 100; // limits of records per page

        // Join to the etudiant to get the associated etudiant columns
        $query = $query->leftJoin('etudiants', 'etudiants.id', 'candidatures.etudiant_id');

        // Join to the formation to get the associated formation columns
        $query = $query->leftJoin('formations', 'formations.id', 'candidatures.formation_id');

        // Join to the diplome to get the associated diplome columns
        $query = $query->leftJoin('diplomes', 'diplomes.id', 'candidatures.diplome_id');

        // Join to the etablissement to get the associated etablissement columns
        $query = $query->leftJoin('etablissements', 'etablissements.id', 'candidatures.etablissement_id');
        
        // define fields to select
        $query->select('candidatures.*', 'etudiants.nom', 'etudiants.prenom','formations.intitule_filiere as intitule_filiere', 'diplomes.niveau as diplome_niveau', 'etablissements.sigle as etablissement_sigle', 'etablissements.nom as etablissement_nom','etablissements.pays as etablissement_pays','etablissements.ville as etablissement_ville');

        $query->orderBy('updated_at', 'desc');

        $candidatures = $query->paginate($limit);

        return view('admin.candidatures')->with('candidatures', $candidatures);
    }

    public function etudiants() {
        $limit = 100; // limits of records per page
        $etudiants = Etudiant::orderBy('nom', 'asc')->paginate($limit);
        return view('admin.etudiants')->with('etudiants', $etudiants);
    }

    public function etablissements() {
        $limit = 100; // limits of records per page
        $etablissements = Etablissement::orderBy('nom', 'asc')->paginate($limit);
        return view('admin.etablissements')->with('etablissements', $etablissements);
    }

    public function formations() {
        
        $limit = 100; // limits of records per page

        // Join to the diplome to get the associated diplome columns
        $query = Formation::leftJoin('diplomes', 'diplomes.id', 'formations.diplome_id');

        // Join to the etablissement to get the associated etablissement columns
        $query = $query->leftJoin('etablissements', 'etablissements.id', 'formations.etablissement_id');
        
        // define fields to select
        $query->select('formations.*', 'diplomes.niveau as diplome_niveau', 'etablissements.sigle as etablissement_sigle', 'etablissements.nom as etablissement_nom','etablissements.pays as etablissement_pays','etablissements.ville as etablissement_ville');

        $query->orderBy('intitule_filiere', 'asc');

        $formations = $query->paginate($limit);

        return view('admin.formations')->with('formations', $formations);
    }

    public function diplomes() {
        $limit = 100; // limits of records to retrieve
        $diplomes = Diplome::orderBy('intitule', 'asc')->paginate($limit);
        return view('admin.diplomes')->with('diplomes', $diplomes);
    }

    public function reglages() {
        // $admin = Auth::user()->admin;
        return view('admin.reglages')->with('admin', $admin);
    }

    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dossierCandidature($id)
    {   
        // the current auth is admin
        $user = Auth::user();
        if ($user->typeCompte != 'ADMIN') dd('Authorization error : Vous ne pouvez pas éffectuer cette action');

        $candidature = Candidature::findOrFail($id);
        return view('admin.dossierCandidature', ['candidature' => $candidature]);
    }
}
