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
    return view('landingTurista');
});
Route::get('/datosAgencia', function () {
    return view('datosAgencia');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('crearDatosAgencia','agencyDataController@crear');
Route::post('modificarDatosAgencia','agencyDataController@modificar');
Route::get('formularioAgencia', function () {
    return view('FormularioAgencia');
});
Route::get('modDatosAgencia', function () {
    return view('modDatosAgencia');
});

Route::get('verPerfil','perfilController@getPerfil');
Route::post('registroPaquete','paqueteController@crear');

Route::get('/landingTurista', function () {
    return view('landingTurista');
});

Route::get('consultaRes','resultadosController@buscar');
Route::get('verPaquetes','listarPaquetesController@consultar');
Route::get('descripcion','listarPaquetesController@describirPaquete');
Route::get('comprar','listarPaquetesController@adquirirPaquete');
Route::get('comprarpaquete','listarPaquetesController@comprarPaquete');

