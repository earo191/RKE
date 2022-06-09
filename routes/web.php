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



Route::get('/modulos/user/sala/index', function () {
    return view('modulos.user.sala.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'usuario', 'as' => 'usuario.'], function () {
    Route::get('/', 'User\UserController@index')->name('index');
    Route::put('/{id}', 'User\UserController@update')->name('update');

});

Route::group(['prefix' => 'info', 'as' => 'info.'], function () {
    Route::get('/terminos', function () {return view('modulos.user.informacion.terminos'); })->name('terminos');
    Route::get('/acerca', function () {return view('modulos.user.informacion.acerca'); })->name('acerca');
    Route::get('/privacidad', function () {return view('modulos.user.informacion.privacidad'); })->name('privacidad');
    Route::get('/quienesomos', function () {return view('modulos.user.informacion.quienesomos'); })->name('quienesomos');
});

Route::group(['prefix' => 'recarga', 'as' => 'recarga.'], function () {
    Route::get('/', 'Recarga\RecargasController@index')->name('index');
    Route::get('/aceptadas', 'Recarga\RecargasController@aceptadas')->name('aceptadas');
    Route::get('/rechazadas', 'Recarga\RecargasController@rechazadas')->name('rechazadas');
    Route::get('/{id}', 'Recarga\RecargasController@update')->name('update');
    Route::get('/rechazar/{id}', 'Recarga\RecargasController@rechazar')->name('rechazar');

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
    Route::get('/tranferencia', 'monedero\MonederoController@createTranferencia')->name('createTransfer');
    Route::post('store', 'monedero\MonederoController@store')->name('store');
    // Route::post('store/transfer', 'monedero\MonederoController@storeTranfer')->name('storeTranfer');

});

Route::group(['prefix' => 'banco', 'as' => 'banco.'], function () {
    Route::get('/', 'banco\bancosController@index')->name('index');
    Route::get('/Crear', 'banco\bancosController@create')->name('create');
    Route::get('{id}/edit', 'banco\bancosController@edit')->name('edit');
    Route::post('store', 'banco\bancosController@store')->name('store');
    Route::put('{id}', 'banco\bancosController@update')->name('update');

});

Route::group(['prefix' => 'pagomovil', 'as' => 'pagomovil.'], function () {
    Route::get('/', 'pagomovil\PagoMovilController@index')->name('index');
    Route::get('/Crear', 'pagomovil\PagoMovilController@create')->name('create');
    Route::get('/edit/{id}', 'pagomovil\PagoMovilController@edit')->name('edit');
    Route::post('store', 'pagomovil\PagoMovilController@store')->name('store');
    Route::put('/edit/{id}', 'pagomovil\PagoMovilController@update')->name('update');

});

Route::group(['prefix' => 'tasa', 'as' => 'tasa.'], function(){
    Route::get('/', 'Tasa\TasaController@index')->name('index');
    Route::post('store', 'Tasa\TasaController@store')->name('store');
});

// Route::get('/modulos/admin/tasa/index', function () {
//     return view('modulos.admin.tasa.index');
// });

Route::group(['prefix' => 'sala', 'as' => 'sala.'], function () {
    Route::get('/', 'sala\SalaController@index')->name('index');
    
});

Route::group(['prefix' => 'referidos', 'as' => 'refe.'], function () {
    Route::get('/{referralCode}', 'Referidos\ReferralController@index')->name('index');
    
});

// Route::get('/modulos/user/sala/index', function () {
//     return view('modulos.user.sala.index');
// });
