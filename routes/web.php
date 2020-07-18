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

/* ########## RUTAS DEFINITIVAS ########## */

Route::group(['prefix' => 'admin'], function() {

	Route::get('/', 'LogInController@Acceso')->name('acceso');
	Route::post('/login', 'LogInController@LogIn')->name('login');

	Route::get('/menu','AdminController@menuPrincipal')->name('menu');

	Route::get('/agregar-alumno','AdminController@agregarAlumno')->name('agregarAlumno');
	Route::post('/nuevo-alumno','AdminController@nuevoAlumno')->name('nuevoAlumno');
	Route::get('/alumnos', 'AdminController@verAlumnos')->name('verAlumnos');
	Route::delete('/eliminar-alumno/{id}', 'AdminController@eliminarAlumno')->name('eliminarAlumno');

	Route::get('/agregar-actividad','AdminController@agregarActividad')->name('agregarActividad');
	Route::post('/nueva-actividad','AdminController@nuevaActividad')->name('nuevaActividad');

});
/* ########## RUTAS DEFINITIVAS ########## */

