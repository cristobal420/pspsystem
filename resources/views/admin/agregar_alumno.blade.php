
@extends('layouts.admin')

@section('titulo','Agregar Alumno')

@section('contenido')
<div class="card card-primary col-12">

<div class="card-header">
  <h3 class="card-title">Agregar alumno nuevo</h3>
</div>
       
<form>
    <div class="card-body">
      <div class="form-group">
        <label for="rut">RUT</label>
        <input type="text" class="form-control" id="rut" placeholder="Ingrese el RUT del alumno">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del alumno">
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos del alumno">
      </div>
      <div class="form-group">
        <label for="fnac">Fecha nacimiento</label>
        <input type="date" class="form-control" id="fnac" >
      </div>
      <div class="form-group">
        <label>Diagnostico a Necesidades Educativas Especiales</label>
          <select class="custom-select">
            <option> NEE de tipo permanente</option>
            <option> NEE de tipo transitoria</option>
          </select>
      </div>
    </div>
                
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</form>
</div>
@endsection


