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

// RUTAS PROVISORIAS PARA DESARROLLO DE DISEÑO 

// Route::get('/', function () {
// 	return view('admin/login');
// })->name('login');

Route::get('/agregar-alumno', function () {
	return view('admin/agregar_alumno');
})->name('agregar_alumno');

Route::get('/agregar-actividad', function () {
	return view('admin/agregar_actividad');
})->name('agregar_actividad');

Route::get('/ver-actividades', function () {
	return view('admin/ver_actividades');
})->name('ver_activividades');

/* ########## RUTAS DEFINITIVAS ########## */

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'LogInController@Acceso')->name('acceso');
	Route::post('/login', 'LogInController@LogIn')->name('login');
});
/* ########## RUTAS DEFINITIVAS ########## */

