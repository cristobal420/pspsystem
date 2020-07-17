
@extends('layouts.admin')

@section('titulo','Agregar Alumno')

@section('contenido')
<div class="card card-primary col-12">

<div class="card-header">
  <h3 class="card-title">Agregar alumno nuevo</h3>
</div>
       
<form action="{{ route('nuevoAlumno') }}" method="POST">
  {{ csrf_field() }}
    <div class="card-body">
      <div class="form-group">
        <label for="rut">RUT</label>
        <input type="text" class="form-control" name="rut" placeholder="Ingrese el RUT del alumno">
      </div>
      <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" name="nombres" placeholder="Ingrese el nombre del alumno">
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellidos del alumno">
      </div>
      <div class="form-group">
        <label for="fnac">Fecha nacimiento</label>
        <input type="date" class="form-control" name="fnac" >
      </div>
      <div class="form-group">
        <label for="telenfono">Telefono</label>
        <input type="text" class="form-control" name="telefono" placeholder="Ingrese telefono del alumno" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email"  placeholder="Ingrese email del alumno">
      </div>
      <div class="form-group">
        <label>Diagnostico a Necesidades Educativas Especiales</label>
          <select class="custom-select" name="diagnostico">
            <option> NEE de tipo permanente</option>
            <option> NEE de tipo transitoria</option>
          </select>
      </div>
      <div class="form-group">
        <label>Profesor</label>
          <select class="custom-select" name="profesor_id">
            @foreach ($profesores as $profesor) {
            <option value="{{ $profesor->id }}">{{ $profesor->rut }} {{ $profesor->nombres }}</option>;
            }
            @endforeach
          </select>
      </div>
    </div>
                
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Agregar</button>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
</div>
@endsection


