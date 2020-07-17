
  
@extends('layouts.admin')
@section('titulo','Agregar Actividad')


@section('contenido')
    

<div class="card card-primary col-6">
      <div class="card-header">
        <h3 class="card-title">Crear actividad</h3>
      </div>
              <!-- /.card-header -->
              <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <input type="text" class="form-control" id="pregunta" >
          </div>
          <div class="form-group">
            <label for="alternativa">Alternativa A</label>
            <input type="text" class="form-control" id="alternativa">
            <input type="checkbox"><label>Check si esta es la respuesta correcta!</label>
          </div>
          <div class="form-group">
            <label for="alternativa">Alternativa B</label>
            <input type="text" class="form-control" id="alternativa">
            <input type="checkbox"><label>Check si esta es la respuesta correcta!</label>
          </div>
          <div class="form-group">
            <label for="alternativa">Alternativa C</label>
            <input type="text" class="form-control" id="alternativa">
            <input type="checkbox"><label>Check si esta es la respuesta correcta!</label>
          </div>
          <div class="form-group">
            <label for="alternativa">Alternativa D</label>
            <input type="text" class="form-control" id="alternativa">
            <input type="checkbox"><label>Check si esta es la respuesta correcta!</label>
                    
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Adjuntar imagen o video referencial (Opcional)</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="file">
                <label class="custom-file-label" for="exampleInputFile">Subir archivo</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Subir</span>
              </div>
            </div>
          </div>
        </div>
                <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Agregar pregunta</button>
        </div>
      </form>
    </div>
            <!-- /.card -->

<div class="col-6">
    <div class="card-header">
        <h3 class="card-title">Detalle de la actividad</h3>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4">
          <div class="info-box bg-light">
            <div class="info-box-content">
              <span class="info-box-text text-center text-muted">Total de preguntas</span>
              <span class="info-box-number text-center text-muted mb-0">4</span>
            </div>
           </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="info-box bg-light">
             <div class="info-box-content">
              <span class="info-box-text text-center text-muted">Tiempo estimado</span>
              <span class="info-box-number text-center text-muted mb-0">60 Minutos</span>
            </div>
          </div>
        </div> 
        <div class="col-12 col-sm-4">
          <div class="info-box bg-light">
            <div class="info-box-content">
              <span class="info-box-text text-center text-muted">Porcentaje de exigencia</span>
              <span class="info-box-number text-center text-muted mb-0">50%</span>
            </div>
          </div>
        </div> 
    </div>
    <div class="invoice p-3 mb-3">
              <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <i class="fas fa-edit"></i> Actividad Nº1.
            <small class="float-right">Fecha 01/07/2020</small>
          </h4>
         </div>
                <!-- /.col -->
      </div>

              <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>COD</th>
              <th>Pregunta</th>
              <th>Respuesta Correcta</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Cuanto es 2 + 2</td>
              <td>Cuatro</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Cuanto es 2 + 2</td>
              <td>Cuatro</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Cuanto es 2 + 2</td>
              <td>Cuatro</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Cuanto es 2 + 2</td>
              <td>Cuatro</td>
            </tr>
            </tbody>
          </table>
        </div>
                <!-- /.col -->
      </div>
              <!-- /.row -->
      <div class="card-footer">
          <button type="submit" class="btn btn-primary">Finalizar actividad</button>
    </div>
</div>

@endsection