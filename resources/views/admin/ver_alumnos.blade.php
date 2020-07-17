
@extends('layouts.admin')

@section('titulo','Ver alumnos')

@section('contenido')
<div class="card  card-primary col-12">

  <div class="card-header">
    <h3 class="card-title">Listado de alumnos</h3>
  </div>

  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Rut</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>NEE</th>
        
      </tr>
      </thead>
      <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
          <td>{{ $alumno->rut }}</td>
          <td>{{ $alumno->nombres }}</td>
          <td>{{ $alumno->apellidos }}</td>
          <td>{{ $alumno->fnac }}</td>
          <td>{{ $alumno->telefono }}</td>
          <td>{{ $alumno->email }}</td>
          <td>{{ $alumno->NEE }}</td>
          <td>
            <form method="POST" action="{{ route('eliminarAlumno',$alumno->id) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-block btn-outline-danger">Eliminar</button>
            </form>
          </td>
          <td>
            <button type="submit" class="btn btn-block btn-outline-info">Editar</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

       