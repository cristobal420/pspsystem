<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PSPSYSTEM | Agregar alumno</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="AdminLte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLte/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="AdminLte/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PSP SYSTEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- ESTO ES EL USUARIO CON SU FOTITO -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLte/img/user5-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Belen Manzano</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- ESTO ES EL SIDEBARD DEL LADO IZQUIERO DE LA PANTALLA !! -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gestion de alumnos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visualizar alumnos</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Agregar Nuevo Alumno</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Actividad</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- BODY DONDE IRA CONTENIDO -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
  
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

        

        </div><!--fin row-->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017-2020 <a href="https://atlasdev.cl">Atlasdev.cl</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="AdminLte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLte/js/adminlte.min.js"></script>
</body>
</html>
