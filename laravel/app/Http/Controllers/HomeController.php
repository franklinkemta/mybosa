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
        
        // Auth::logout();
        // dd($typeCompte);
        switch ($typeCompte) {
            case 'ETUDIANT': {
                $etudiant = Auth::user()->etudiant;

                // check if the account has been validated
                if (!$etudiant) {
                    Auth::logout();
                    abort(403, '[E1] Unauthorized action. Ce compte n\'existe pas ou n\'a pas encore été validé !');
                }
                return view('etudiant.home');
            }
            break;
            case 'ADMIN': {

                $admin = Auth::user()->admin;
                
                // check if the account has been validated
                if (!$admin) {
                    Auth::logout();
                    abort(403, '[E0] Unauthorized action. Ce compte n\'existe pas ou n\'a pas encore été validé !');
                }

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
                return view('admin.home')->with('statistiques', $statistiques);
            }
            break;
            case 'ETABLISSEMENT': {
                
                $etablissement = Auth::user()->etablissement;

                // check if the account has been validated
                if (!$etablissement) {
                    Auth::logout();
                    abort(403, '[E2] Unauthorized action. Ce compte n\'existe pas ou n\'a pas encore été validé !');
                }
                
                // get all the stats for the etablissement
                $count_candidatures = Candidature::where('etablissement_id', $etablissement->id)->count();
                
                $count_etutiants = Candidature::where('candidatures.id', $etablissement->id)
                                                ->leftJoin('etudiants', 'etudiants.id', 'candidatures.etudiant_id')
                                                ->count();
                                                
                $count_formations = Formation::where('etablissement_id', $etablissement->id)->count();

                $statistiques = array(
                    'candidatures' => $count_candidatures,
                    'etudiants' => $count_etutiants,
                    'formations' => $count_formations,
                );
                return view('etablissement.home')->with('statistiques', $statistiques);
            }
            break;
            case 'CONSEILLER': {
                $conseiller = Auth::user()->conseiller;

                // check if the account has been validated
                if (!$conseiller) {
                    Auth::logout();
                    abort(403, '[E3] Unauthorized action. Ce compte n\'existe pas ou n\'a pas encore été validé !');
                }
                return back();
                // return view('conseiller.home');
            }
            break;
        
            default: {
                Auth::logout();
                abort(403, '[E4] Unauthorized action. Ce compte n\'existe pas ou a été supprimé !');
                // return back(); // in case of error
            }
            break;
        }
    }
}
