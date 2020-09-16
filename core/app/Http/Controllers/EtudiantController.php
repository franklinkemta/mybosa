<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function formulaireCandidature()
    {   
        $user = Auth::user();

        return view('etudiant.formulaireCandidature');
    }

    /**
     * Show the etudiant dossier candidat
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dossierCandidat()
    {   
        $etudiant = Auth::user()->etudiant;

        return view('etudiant.dossierCandidat');
    }

    /**
     * Create the candidatures for the etudiant selectionformations
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inscriptionSelectionFormations()
    {   
        //$etudiant = Auth::user()->etudiant;

        //return view('etudiant.dossierCandidat');
    }
    
}
