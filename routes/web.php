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
    return view('modificarPerfil');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('crearDatosAgencia','agencyDataController@crear');
Route::get('formularioAgencia', function () {
    return view('FormularioAgencia');
});


Route::post('registroPaquete','paqueteController@crear');

Route::get('/landingTurista', function () {
    return view('landingTurista');
});

Route::post('verPaquetes','listarPaquetesController@consultar');