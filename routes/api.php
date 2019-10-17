<?php

use Illuminate\Http\Request;

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


Route::get('user/{id}', "UsuarioController@show");

//minhas rotas
Route::resource('/alternativa', 'AlternativaController');
Route::resource('/questionario', 'QuestionarioController');
Route::resource('/respondente', 'RespondenteController');
Route::resource('/tipo', 'TipoController');
Route::resource('/usuario', 'UsuarioController');
