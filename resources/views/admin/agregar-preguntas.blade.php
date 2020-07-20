@extends('layouts.admin')
@section('titulo','Agregar Preguntas')

@section('contenido')

@foreach ($actividad as $actividades)
	
@endforeach



<div class="card card-primary col-6">
	<div class="card-header">
		<h3 class="card-title">Agregar preguntas a la actividad "{{ $actividad->nombre }}"</h3>
	</div>
	<form method="POST" action="{{ route('nuevaPregunta', $actividad->id ) }}">
		@csrf
	<div class="card-body">
		<div class="row">
			<div class="form-group col-4">
				<label for="pregunta"> NºActividad</label>
				<input type="text" class="form-control" name="actividad" value="{{ $actividad->id}}">
			</div>
			<div class="form-group col-4">
				<label for="pregunta">Categoria</label>
				<input type="text" class="form-control" name="categoria" value="{{ $actividad->subcategorias->categorias->nombre}}" >
			</div>
			<div class="form-group col-4">
				<label for="pregunta">Nivel</label>
				<input type="text" class="form-control" name="nivel" value="{{ $actividad->niveles->nivel }}" >
			</div>
		</div>

		<div class="form-group">
			<label for="pregunta">Pregunta</label>
			<input type="text" class="form-control" name="pregunta" >
		</div>
		<div class="form-group">
			<label for="alternativa-a">Alternativa A</label>
			<input type="text" class="form-control" name="alternativa-a" >
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="check-a" value="A">
				<label class="form-check-label">Click al check si esta es la respuesta correcta</label>
			</div>
		</div>
		<div class="form-group">
			<label for="alternativa-b">Alternativa B</label>
			<input type="text" class="form-control" name="alternativa-b"  >
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="check-b" value="B">
				<label class="form-check-label">Click al check si esta es la respuesta correcta</label>
			</div>
		</div>
		<div class="form-group">
			<label for="alternativa-c">Alternativa C</label>
			<input type="text" class="form-control" name="alternativa-c" >
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="check-c" value="C">
				<label class="form-check-label">Click al check si esta es la respuesta correcta</label>
			</div>
		</div>
		<div class="form-group">
			<label for="alternativa-d">Altenativa D</label>
			<input type="text" class="form-control" name="alternativa-d" >
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="check-d" value="D">
				<label class="form-check-label">Click al check si esta es la respuesta correcta</label>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary boton" name="">Agregar pregunta</button>
		</div>
	</form>
		
	</div>
</div>


@endsection

@section('scripts')
	


@endsection