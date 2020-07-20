<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profesores;
use App\Alumnos;
use App\Categorias;
use App\Subcategorias;
use App\Niveles;
use App\Actividades;
use App\Preguntas;
use App\Respuestas;

class AdminController extends Controller
{
	
	public function menuPrincipal()
	{
		return view('admin/menu');
	}

	public function agregarAlumno()
	{
		$profesores = Profesores::all();
		
		return view('admin/agregar_alumno')
		->with('profesores',$profesores);
	}
	public function nuevoAlumno(Request $request)
	{
		$validacion = $request->validate([
			'rut' => 'required',
			'nombres' => 'required',
			'apellidos'=> 'required',
			'fnac' => 'required',
			'telefono' => 'numeric|required',
			'email' => 'email|required',
			'diagnostico' => 'required',
			'profesor_id' => 'required'
		]);
		
		$pass = bcrypt('secret');

		$alumno = new Alumnos;

		$alumno->rut = $request->rut;
		$alumno->nombres = $request->nombres;
		$alumno->apellidos = $request->apellidos;
		$alumno->fnac = $request->fnac;
		$alumno->telefono = $request->telefono;
		$alumno->email = $request->email;
		$alumno->password = $pass;
		$alumno->NEE = $request->diagnostico;
		$alumno->profesores_id = $request->profesor_id;

		$alumno->save();

		return back();

	}

	public function verAlumnos(){
		$alumnos = Alumnos::all();
		return view('admin/ver_alumnos')
		->with('alumnos',$alumnos);
	}

	public function eliminarAlumno($id){
		$alumno = Alumnos::find($id);
		$alumno->delete();
		return back();
	}


	public function agregarActividad()
	{
		$categorias = Categorias::all();
		$niveles = Niveles::all();
		return view('admin/agregar_actividad')
		->with('categorias',$categorias)
		->with('niveles',$niveles);
	}

	public function apiSubcategorias($id)
	{
		return $subcategorias = Subcategorias::where('categorias_id',$id)->get();
	}

	public function nuevaActividad(Request $request)
	{
		$validacion = $request->validate([
			'nombre' => 'required',
			'categorias' => 'required',
			'subcategorias'=> 'required',
			'niveles' => 'required',
		]);

		$actividad = new Actividades;
		$actividad->nombre = $request->nombre;
		$actividad->subcategorias_id = $request->subcategorias;
		$actividad->niveles_id = $request->niveles;
		$actividad->save();
		return redirect()->route('agregarPreguntas',$actividad->id);

	}

	public function agregarPreguntas($actividad)
	{
		
		$actividad = Actividades::find($actividad);
		return view('admin/agregar-preguntas')
		->with('actividad',$actividad);
	}

	public function nuevaPregunta(Request $request, $actividad)
	{
		// dd($request);

		$pregunta = new Preguntas;
		$pregunta->pregunta = $request->pregunta;
		$pregunta->actividades_id = $request->actividad;
		$pregunta->save();

		$respuestas= new Respuestas;
		$respuestas->preguntas_id = $pregunta->id;
		$respuestas->respuesta = $request->correcta;
		$respuestas->correcta = 'si';
		$respuestas->save();
		
		$respuestas= new Respuestas;
		$respuestas->preguntas_id = $pregunta->id;
		$respuestas->respuesta = $request->incorrecta1;
		$respuestas->correcta = 'no';
		$respuestas->save();

		$respuestas= new Respuestas;
		$respuestas->preguntas_id = $pregunta->id;
		$respuestas->respuesta = $request->incorrecta2;
		$respuestas->correcta = 'no';
		$respuestas->save();

		$respuestas= new Respuestas;
		$respuestas->preguntas_id = $pregunta->id;
		$respuestas->respuesta = $request->incorrecta3;
		$respuestas->correcta = 'no';
		$respuestas->save();

		return 'se agrego';
	}

}
