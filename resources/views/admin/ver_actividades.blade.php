@extends('layouts.profesor')

@section('titulo','Ver Actividades')
@section('direccion', 'Ver Actividades')

@section('contenido')
<div class="card  card-purple col-12">

  <div class="card-header">
    <h3 class="card-title">Listado de actividades</h3>
  </div>

  <div class="card-body">
    <table id="tabla-actividades" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nº</th>
        <th>Actividad</th>
        <th>Sub categoria / Categoria</th>
        <th>Nivel</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($actividades as $act)
        <tr>
            <td>{{ $act->id }}</td>
            <td>{{ $act->nombre }}</td>
            <td>{{ $act->subcategorias->nombre }}, {{ $act->subcategorias->categorias->nombre }}</td>
            <td>{{ $act->niveles->nivel }}</td>
            <td>
              <button type="submit" class="btn btn-block btn-outline-warning" data-toggle="modal" data-target="#modal-{{ $act->id }}">
                <i class="fas fa-eye"></i>
              </button>
            </td> 
        </tr>  
       @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

       