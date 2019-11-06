<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//minhas rotas
Route::middleware(['auth'])->group(function () {
    Route::resource('/alternativa', 'AlternativaController');
    Route::resource('/questionario', 'QuestionarioController');
    Route::resource('/tipo', 'TipoController');
    Route::put('/newtoken', 'TokenController@update');
    Route::get('/integracao', function () {
        return view('integracao');
    });
    Route::get('/token', function () {
        return view('token');
    });
});
//welcome links
Route::resource('/respondente', 'RespondenteController');

Route::get('/devs', function () {
    return view('devs');
});
Route::get('/orientador', function () {
    return view('orientador');
});
Route::get('/tech', function () {
    return view('tech');
});
Route::get('/docs', function () {
    return view('docs');
});
//teste
Route::get('/teste', function () {
    return view('teste');
});
