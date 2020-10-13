<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\Profesores;
use App\Categorias;
use App\Subcategorias;
use App\Niveles;
use App\Actividades;
use App\Preguntas;
use App\Respuestas;
use Flash;
use Auth;
use Mail;

class ActividadesController extends Controller
{
	/* ##### OBJETIVOS ##### */
	// PROFE
	// ASIGNAR ACTIVIDADS A ALUMNOS.
	// Recomendar actividades segun categorias/edades.
	// Enviar correos de actividades asignadas.
	// Alumno
	// Realizar actividades.
	// Guardar respuestas, resultados, etc.
	// Generar y enviar reportes al alumno.
	/* ##### OBJETIVOS ##### */
	public function __construct ()
	{
		//
	}
	public function asignar (Request $request, $id)
	{
		/* ASIGNAR ACTIVIDAD A ALUMNO POR PARTE DE PROFESOR */
		// id de alumno, request con datos de inicio, fecha termino de actividad (plazos), mas alumno.
	}
}















