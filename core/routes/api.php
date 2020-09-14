<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'etudiant'], function() {
    Route::get('diplomes', ['as' => 'get_diplomes', 'uses' => 'DiplomeController@get']);
    Route::get('formations', ['as' => 'get_formations', 'uses' => 'FormationController@get']);
});