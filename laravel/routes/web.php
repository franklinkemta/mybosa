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

Route::get('/orientation', function () {
    return view('orientation');
});

// Auth route : /login and /register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('etudiant')->group(function () {
    Route::get('selectionFormations', 'EtudiantController@selectionFormations')->name('selectionFormationsEtudiant');
    Route::get('inscriptionSelectionFormations', 'EtudiantController@inscriptionSelectionFormations')->name('inscriptionSelectionFormationsEtudiant');
    Route::get('candidatures', 'EtudiantController@candidatures')->name('candidaturesEtudiant');

    // Dossier Candidat Etudiant
    Route::get('dossierCandidat/{section_id?}', 'EtudiantController@show')->name('dossierCandidatEtudiant');
    
    // Save each section
    Route::post('dossierCandidat', 'EtudiantController@store')->name('storeDossierCandidatEtudiant');
    Route::post('dossierCandidatSection1', 'EtudiantController@storeSection1')->name('storeSection1DossierCandidatEtudiant');
    Route::post('dossierCandidatSection2', 'EtudiantController@storeSection2')->name('storeSection2DossierCandidatEtudiant');
    Route::post('dossierCandidatSection3', 'EtudiantController@storeSection3')->name('storeSection3DossierCandidatEtudiant');
    Route::post('dossierCandidatSection4', 'EtudiantController@storeSection4')->name('storeSection4DossierCandidatEtudiant');
});

Route::prefix('admin')->group(function () {
    Route::get('candidatures', 'AdminController@candidatures')->name('candidaturesAdmin');
    Route::get('etudiants', 'AdminController@etudiants')->name('etudiantsAdmin');
    Route::get('etablissements', 'AdminController@etablissements')->name('etablissementsAdmin');
    Route::get('formations', 'AdminController@formations')->name('formationsAdmin');
    Route::get('diplomes', 'AdminController@diplomes')->name('diplomesAdmin');
    Route::get('reglages', 'AdminController@reglages')->name('reglagesAdmin');
});

Route::prefix('etablissement')->group(function () {
    Route::get('candidatures', 'EtablissementController@candidatures')->name('candidaturesEtablissement');
    Route::get('etudiants', 'EtablissementController@etudiants')->name('etudiantsEtablissement');
    Route::get('formations', 'EtablissementController@formations')->name('formationsEtablissement');
    Route::get('reglages', 'EtablissementController@reglages')->name('reglagesEtablissement');
});

Route::get('candidature/{id}', 'CandidatureController@voirDossierCandidature')->name('voirDossierCandidature');

