<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if($user->typeCompte == 'ETUDIANT') return view('etudiant.home');
        if($user->typeCompte == 'CONSEILLER') return view('conseiller.home');
        if($user->typeCompte == 'ETABLISSEMENT') return view('etablissement.home');
        if($user->typeCompte == 'ADMIN') return view('admin.home');

        return redirect()->route('/'); // in case of error
    }
}
