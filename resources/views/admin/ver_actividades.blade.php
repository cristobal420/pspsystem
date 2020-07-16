
@extends('layouts.admin')

@section('titulo','Ver actividades')

@section('contenido')
<div class="card col-12">

  <div class="card-header">
    <h3 class="card-title">Actividades disponibles</h3>
  </div>

  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Trident</td>
        <td>InternetExplorer 4.0</td>
        <td>Win 95+</td>
        <td> 4</td>
        <td>X</td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection

       