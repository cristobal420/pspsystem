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

Route::group(['prefix' => 'profesor'], function() {

	Route::get('/', 'LogInController@Acceso')->name('acceso');
	Route::post('/login', 'LogInController@LogIn')->name('login');

	Route::get('/menu','ProfesorController@menuPrincipal')->name('menu');

	Route::get('/agregar-alumno','ProfesorController@agregarAlumno')->name('agregarAlumno');
	Route::post('/nuevo-alumno','ProfesorController@nuevoAlumno')->name('nuevoAlumno');
	Route::get('/alumnos', 'ProfesorController@verAlumnos')->name('verAlumnos');
	Route::delete('/eliminar-alumno/{id}', 'ProfesorController@eliminarAlumno')->name('eliminarAlumno');
	Route::post('/editar-alumno/{id}','ProfesorController@editarAlumno')->name('editarAlumno');

	Route::get('/agregar-actividad','ProfesorController@agregarActividad')->name('agregarActividad');
	Route::post('/nueva-actividad','ProfesorController@nuevaActividad')->name('nuevaActividad');
	Route::get('/agregar-preguntas/{actividad}','ProfesorController@agregarPreguntas')->name('agregarPreguntas');
	Route::post('/nueva-pregunta/{actividad}','ProfesorController@nuevaPregunta')->name('nuevaPregunta');
	Route::get('/ver-actividades', 'ProfesorController@verActividades')->name('verActividades');
	

});
/* ########## RUTAS DEFINITIVAS ########## */

