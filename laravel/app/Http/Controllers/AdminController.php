<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Candidature;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dossierCandidature($id)
    {   
        // the current auth is admin
        $user = Auth::user();
        if ($user->typeCompte != 'ADMIN') dd('Authorization error : Vous ne pouvez pas éffectuer cette action');

        $candidature = null ; // Candidature::findOrFail($id);
        return view('admin.dossierCandidature', ['candidature' => $candidature]);
    }
}
