<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Candidature;
use App\Etudiant;
use App\Etablissement;
use App\Formation;
use App\Diplome;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $typeCompte = $user->typeCompte;
        
        switch ($typeCompte) {
            case 'ETUDIANT': {
                return view('etudiant.home');
            }
            break;
            case 'ADMIN': {
                // get all the stats
                $count_candidatures = Candidature::count();
                $count_etutiants = Etudiant::count();
                $count_etablissements = Etablissement::count();
                $count_formations = Formation::count();
                $count_diplomes = Diplome::count();

                $statistiques = array(
                    'candidatures' => $count_candidatures,
                    'etudiants' => $count_etutiants,
                    'etablissements' => $count_etablissements,
                    'formations' => $count_formations,
                    'diplomes' => $count_diplomes,
                );
                return view('admin.home')->with('statistiques', $statistiques);;
            }
            break;
            case 'ETABLISSEMENT': {
                return view('etablissement.home');
            }
            break;
            case 'CONSEILLER': {
                return view('conseiller.home');
            }
            break;
        
            default: {
                return back(); // in case of error
            }
            break;
        }
    }
}
