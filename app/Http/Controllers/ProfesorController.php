<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profesores;
use App\Alumnos;
use App\Categorias;
use App\Subcategorias;
use App\Niveles;
use App\Actividades;
use App\Preguntas;
use App\Respuestas;
use Flash;

class ProfesorController extends Controller
{
	
	public function menuPrincipal()
	{
		$alumnos = Alumnos::all()->count();
		$act = Actividades::all()->count();
		// dd($alumnos);
		return view('profesores.menu')
		->with('act',$act)
		->with('alumnos',$alumnos);
	}

	public function agregarAlumno()
	{
		$profesores = Profesores::all();
		
		return view('profesores.agregar_alumno')
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
		]);

		/* ##### VALIDACION ##### */
		$alumn = Alumnos::withTrashed()->where('rut', $request->rut)
			->where('profesores_id', auth('profesores')->user()->id)
			->first();
		if (!is_null($alumn)) {
			Flash::error('Un alumno con ese rut ya está registrado en el sistema');
			return redirect()->back();
		}
		
		$pass = bcrypt($request->rut);

		$alumno = new Alumnos;

		$alumno->rut = $request->rut;
		$alumno->nombres = $request->nombres;
		$alumno->apellidos = $request->apellidos;
		$alumno->fnac = $request->fnac;
		$alumno->telefono = $request->telefono;
		$alumno->email = $request->email;
		$alumno->password = $pass;
		$alumno->NEE = $request->diagnostico;
		$alumno->profesores_id = auth('profesores')->user()->id;

		$alumno->save();

		return back()
		->with('flash','El alumno a sido agregado exitosamente');

	}

	public function verAlumnos(){
		$alumnos = Alumnos::all();
		return view('profesores.ver_alumnos')
		->with('alumnos',$alumnos);
	}

	public function eliminarAlumno($id){
		$alumno = Alumnos::find($id);
		$alumno->delete();
		return back()
		->with('flash-deleted','El alumno a sido eliminado');;
	}
	public function editarAlumno(Request $request,$id){

		$alumno = Alumnos::find($id);

		$alumno->rut = $request->rut;
		$alumno->nombres = $request->nombres;
		$alumno->apellidos = $request->apellidos;
		$alumno->fnac = $request->fnac;
		$alumno->telefono = $request->telefono;
		$alumno->email = $request->email;
		$alumno->NEE = $request->diagnostico;
		$alumno->profesores_id = $request->profesor_id;
		$alumno->save();

		return back()
		->with('flash-edit','El alumno a sido editado exitosamente');
	}


	public function agregarActividad()
	{
		$categorias = Categorias::all();
		$niveles = Niveles::all();
		return view('profesores.agregar_actividad')
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
		return redirect()->route('profesor.agregarPreguntas',$actividad->id);

	}
	public function eliminarAct ($id)
	{
		$actividad = Actividades::find($id);
		$pregs = Preguntas::where('actividades_id', $id)->get();
		foreach ($pregs as $key => $value) {
			$respuesta = Respuestas::where('preguntas_id', $value->id)->delete();
			$value->delete();
		}
		$actividad->delete();
		return redirect()->back()->with('flash-warning','La actividad a sido eliminada del sistema');
	}

	public function agregarPreguntas($actividad)
	{
		
		$actividad = Actividades::find($actividad)->load(['preguntas','preguntas.respuestas']);	
		return view('profesores.agregar_preguntas')
		->with('actividad',$actividad);
	}

	public function nuevaPregunta(Request $request, $actividad)
	{
		
		if($request->hasfile('imagen')){
			$file = $request->file('imagen');
			$nombre = time().$file->getClientOriginalName();
			$file->move(public_path().'/imagenes',$nombre);
		}else{
			$nombre ='';
		}

		$pregunta = new Preguntas;
		$pregunta->pregunta = $request->pregunta;
		$pregunta->imagen= $nombre;
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

		return back();
	}
	
	public function verActividades()
	{
		
		$actividades = Actividades::all();
		return view('profesores.ver_actividades')
		->with('actividades',$actividades);

	}

}
