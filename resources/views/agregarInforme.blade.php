@extends('plantilla')
@section('seccion')

<h1 class="display-4">Nuevo Informe
<a href="{{route('ruta_informe')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>
</h1>
<h1 class="display-4">Llenar los siguientes datos...</h1>
<div class="mt-4 pt-4"></div>

@if (session('mensaje'))
  <div class="alert alert-success">
  {{session('mensaje')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif

<form action="{{route('informe.crearInf')}}" method="POST" enctype="multipart/form-data">
@csrf


@error('tipo')
    <div class="alert alert-danger">
    El tipo de estudio es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('tecnica')
    <div class="alert alert-danger">
    La tecnica es obligatoria
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('paciente')
    <div class="alert alert-danger">
    El paciente es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('medico')
    <div class="alert alert-danger">
    El medico es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('diagnostico')
    <div class="alert alert-danger">
    El diagnostico es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('obvservaciones')
    <div class="alert alert-danger">
    Las obvservaciones son obligatorias
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('fecha')
    <div class="alert alert-danger">
    La fecha obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

<div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Paciente:</label>
    <input type="string" name="paciente" placeholder="Paciente" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Medico:</label>
    <input type="string" name="medico" placeholder="Medico" class="form-control mb-2">
    </div>
    </div>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Area:</label>
      <input type="string" name="area" placeholder="Nombre" class="form-control mb-2" value="{{ old ('area')}}">
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tipo:</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="tipo"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tecnica:</label>
    <textarea class="form-control" id="exampleFormControlTextarea5" rows="4" name="tecnica"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Diagnostico:</label>
    <textarea class="form-control" id="exampleFormControlTextarea3" rows="6" name="diagnostico"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Obvservaciones:</label>
    <textarea class="form-control" id="exampleFormControlTextarea4" rows="6" name="obvservaciones" value="{{ old ('obvservaciones')}}"></textarea>
  </div>

  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 1:</label>
    <input accept="image/*" type="file" name="imagen" />
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 2:</label>
    <input accept="image/*" type="file" name="avatar2" />
    </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 3:</label>
    <input accept="image/*" type="file" name="avatar3" />
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 4:</label>
    <input accept="image/*" type="file" name="avatar4" />
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 5:</label>
    <input accept="image/*" type="file" name="avatar5" />
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Imagen 6:</label>
    <input accept="image/*" type="file" name="avatar6" />
    </div>
    </div>
  </div>
  
  <button class="btn btn-primary btn-block mt-5 mb-10" type="submit" >Insertar</button>
</form>

@endsection