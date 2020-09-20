<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Candidature;
use App\Etudiant;
use App\Formation;

class EtablissementController extends Controller
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
     * Show the all the candidatures
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function candidatures()
    { 

        $etablissement = Auth::user()->etablissement;
        
        $query = Candidature::where('candidatures.etablissement_id', $etablissement->id)->nonArchive();
        $limit = 100; // limits of records per page

        // Join to the etudiant to get the associated etudiant columns
        $query = $query->leftJoin('etudiants', 'etudiants.id', 'candidatures.etudiant_id');

        // Join to the formation to get the associated formation columns
        $query = $query->leftJoin('formations', 'formations.id', 'candidatures.formation_id');

        // Join to the diplome to get the associated diplome columns
        $query = $query->leftJoin('diplomes', 'diplomes.id', 'candidatures.diplome_id');
        
        // define fields to select
        $query->select('candidatures.*', 'etudiants.nom', 'etudiants.prenom','formations.intitule_filiere as intitule_filiere', 'diplomes.niveau as diplome_niveau');

        $query->orderBy('updated_at', 'desc');

        $candidatures = $query->paginate($limit);

        return view('etablissement.candidatures')->with('candidatures', $candidatures);
    }

    public function etudiants() {

        $etablissement = Auth::user()->etablissement;

        $limit = 100; // limits of records per page

        $etudiants = Candidature::where('candidatures.etablissement_id', $etablissement->id)
                                    ->leftJoin('etudiants', 'etudiants.id', 'candidatures.etudiant_id')
                                    ->orderBy('etudiants.nom', 'asc')
                                    ->distinct('etudiants.id')
                                    ->select('etudiants.*')
                                    ->paginate($limit);
        
        // $etudiants = Etudiant::where('etablissement_id', $etablissement->id)->orderBy('nom', 'asc')->paginate($limit);
        return view('etablissement.etudiants')->with('etudiants', $etudiants);
    }


    public function formations() {
        
        $etablissement = Auth::user()->etablissement;

        $limit = 100; // limits of records per page

        $query = Formation::where('etablissement_id', $etablissement->id);
        
        // Join to the diplome to get the associated diplome columns
        $query = $query->leftJoin('diplomes', 'diplomes.id', 'formations.diplome_id');

        // define fields to select
        $query->select('formations.*', 'diplomes.niveau as diplome_niveau');

        $query->orderBy('intitule_filiere', 'asc');

        $formations = $query->paginate($limit);

        return view('etablissement.formations')->with('formations', $formations);
    }


    public function reglages() {
        $etablissement = Auth::user()->etablissement;
        return view('etablissement.reglages')->with('etablissement', $etablissement);
    }

}
