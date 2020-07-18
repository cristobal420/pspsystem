@extends('layouts.admin')
@section('titulo','Agregar Preguntas')

@section('contenido')

@foreach ($actividad as $actividades)
    
@endforeach



<div class="card card-primary col-12">
    <div class="card-header">
        <h3 class="card-title">Agregar preguntas a la actividad {{ $actividad->nombre }}</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <input type="text" class="form-control" name="pregunta" >
        </div>
    </div>

</div>

@endsection

@section('scripts')
    
@endsection