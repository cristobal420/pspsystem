@extends('layouts.admin')
@section('titulo','Agregar Preguntas')

@section('contenido')

@foreach ($actividad as $actividades)
@endforeach



<div class="card card-primary col-6">
    <div class="card-header">
        <h3 class="card-title">Agregar preguntas a la actividad "{{ $actividad->nombre }}"</h3>
    </div>
    <form method="POST" action="{{ route('nuevaPregunta', $actividad->id ) }}" enctype="multipart/form-data">
        @csrf
    <div class="card-body">
        <div class="row">
            <div class="form-group col-3">
                <label for="actividad"> NºActividad</label>
                <input type="text" class="form-control" name="actividad" value="{{ $actividad->id}}">
            </div>
            <div class="form-group col-3">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="{{ $actividad->subcategorias->categorias->nombre}}" >
            </div>
            <div class="form-group col-3">
                <label for="subcategoria">Sub-Categoria</label>
                <input type="text" class="form-control" name="subcategoria" value="{{ $actividad->subcategorias->nombre}}" >
            </div>
            <div class="form-group col-3">
                <label for="pregunta">Nivel</label>
                <input type="text" class="form-control" name="nivel" value="{{ $actividad->niveles->nivel }}" >
            </div>
        </div>

        <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <input type="text" class="form-control" name="pregunta" >
        </div>
        <div class="form-group">
            <label for="imagen">Seleccione imagen de referencia (Opcional)</label>
            <input type="file" name="imagen" >
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

<div class="card card-primary col-6">

    <div class="card-header">
        <h3 class="card-title">Previsualización"{{ $actividad->nombre }}"</h3>
    </div>
    
    <div class="card card-body">
        @foreach ($actividad->preguntas as $pregunta)
            <h2>{{ $pregunta->pregunta }}</h2>
            <img src="{{ asset('../imagenes/'.$pregunta->imagen) }}" style="height:300px">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moda-{{ $pregunta->id }}">
                Respuestas
            </button>
                <div class="modal fade" id="moda-{{ $pregunta->id }}">
                    <div class="modal-dialog">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h4 class="modal-title">{{ $pregunta->pregunta }}</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            @foreach ($pregunta->respuestas as $res)
                            <h5>Respuesta : {{ $res->respuesta }}</h5>
                            <h5>Correcta  : {{ $res->correcta }}</h5>
                            <br>
                            @endforeach
                        </div>
                      </div>
                    </div>
                </div>

        @endforeach
    </div>
    <div class="card-footer">
        <a href="{{ route('menu') }}" class="btn btn-primary">Finalizar actividad</a>
    </div>
    
</div>

@endsection


@section('scripts')

@endsection