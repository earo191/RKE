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

Route::get('/r/{referralCode}', 'Referidos\ReferralController@link')->name('referral.link');

Route::get('/cookie', function () {
    return Cookie::get('referral');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/modulos/admin/procesarpagos/pago_trivia', function () {
    return view('modulos.admin.procesarpagos.pago_trivia');
});

Route::get('/modulos/admin/tasa/index', function () {
    return view('modulos.admin.tasa.index');
});

Route::get('/modulos/user/sala/index', function () {
    return view('modulos.user.sala.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'usuario', 'as' => 'usuario.'], function () {
    Route::get('/', 'User\UserController@index')->name('index');
    Route::put('/{id}', 'User\UserController@update')->name('update');

});

Route::group(['prefix' => 'recarga', 'as' => 'recarga.'], function () {
    Route::get('/', 'Recarga\RecargaController@index')->name('index');
    Route::put('/{id}', 'Recarga\RecargaController@update')->name('update');

});

Route::group(['prefix' => 'trivia', 'as' => 'trivia.'], function () {
    Route::get('/', 'trivia\triviaController@index')->name('index');
    Route::get('/trivia-all', 'trivia\triviaController@list')->name('list');
    Route::get('/CrearTrivia', 'trivia\triviaController@create')->name('create');
    Route::post('store', 'trivia\triviaController@store')->name('store');
    Route::get('/{id}', 'trivia\triviaController@show')->name('show');
    

});

Route::group(['prefix' => 'monedero', 'as' => 'monedero.'], function () {
    Route::get('/', 'monedero\MonederoController@index')->name('index');
    Route::get('/Crear', 'monedero\MonederoController@create')->name('create');
    Route::post('store', 'monedero\MonederoController@store')->name('store');

});

Route::group(['prefix' => 'banco', 'as' => 'banco.'], function () {
    Route::get('/', 'banco\bancosController@index')->name('index');
    Route::get('/Crear', 'banco\bancosController@create')->name('create');
    Route::post('store', 'banco\bancosController@store')->name('store');

});

Route::group(['prefix' => 'pagomovil', 'as' => 'pagomovil.'], function () {
    Route::get('/', 'pagomovil\PagoMovilController@index')->name('index');
    Route::get('/Crear', 'pagomovil\PagoMovilController@create')->name('create');
    Route::post('store', 'pagomovil\PagoMovilController@store')->name('store');

});

Route::group(['prefix' => 'sala', 'as' => 'sala.'], function () {
    Route::get('/', 'sala\SalaController@index')->name('index');
    
});

Route::group(['prefix' => 'referidos', 'as' => 'refe.'], function () {
    Route::get('/{referralCode}', 'Referidos\ReferralController@index')->name('index');
    
});

// Route::get('/modulos/user/sala/index', function () {
//     return view('modulos.user.sala.index');
// });
