<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// import Models for creating account profiles depending on the account role type
use App\User;
use App\Etudiant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   $validationRules = [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'typeCompte' => 'in:ETUDIANT,CONSEILLER,ETABLISSEMENT',
        ];
        if(isset($data['typeCompte'])) {
            if ($data['typeCompte'] == 'ETUDIANT') $validationRules = array_merge($validationRules,[
                'nom' => ['required', 'string', 'max:255'],
                'prenom' => ['required', 'string', 'max:255'],
                'pays' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
            ]);

            if ($data['typeCompte'] == 'CONSEILLER') $validationRules = array_merge($validationRules,[
                'nom' => ['required', 'string', 'max:255'],
            ]);

            if ($data['typeCompte'] == 'ETABLISSEMENT') $validationRules = array_merge($validationRules,[
                'nom' => ['required', 'string', 'max:255'],
            ]);

            return Validator::make($data, $validationRules);
        } else dd('Authorization error: Please specify the account type you want to register for');
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $user = User::create([
            'typeCompte' => $data['typeCompte'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // Register user account data depending on the role 
        // $etudiant = 
        if ($data['typeCompte'] == 'ETUDIANT') Etudiant::create([
            'user_id' => $user->id,
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'pays' => $data['pays'],
            'phone' => $data['phone'],
        ]);

        return $user;
    }
}
