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
            <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>Respuesta Correcta</label>
            <input type="text" class="form-control is-valid" id="inputSuccess" name="correcta">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i>Respuesta Incorrecta</label>
            <input type="text" class="form-control is-invalid" id="inputError" name="incorrecta1" >
        </div>
        <div class="form-group">
            <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i>Respuesta Incorrecta</label>
            <input type="text" class="form-control is-invalid" id="inputError" name="incorrecta2" >
        </div>
        <div class="form-group">
            <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i>Respuesta Incorrecta</label>
            <input type="text" class="form-control is-invalid" id="inputError" name="incorrecta3">
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