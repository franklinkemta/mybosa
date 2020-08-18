<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/formation', function () {
    return view('formation');
});

Route::get('/etablissement', function () {
    return view('etablissement');
});

Route::get('/conseiller', function () {
    return view('conseiller');
});

// ['as' => 'route_name', 'uses' => 'HomeController@typeCompte']
Route::get('/typeCompte', function () {
    return view('auth.typeCompte');
})->name('typeCompte');

Route::get('/inscription', function () {
    if(isset($_GET['typeCompte'])){
        $typeCompte = htmlspecialchars($_GET['typeCompte']);
        if($typeCompte== "etablissement") return view('auth.inscriptionEtablissement');
        else if($typeCompte== "conseiller") return view('auth.inscriptionConseiller');
        else return view('auth.inscriptionEtudiant');
    } else return view('auth.inscriptionEtudiant');
})->name('inscription');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('etudiant')->group(function () {
    Route::get('formulaireCandidature', 'EtudiantController@formulaireCandidature')->name('formulaireCandidatureEtudiant');
});

