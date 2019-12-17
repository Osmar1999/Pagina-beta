@extends('plantilla')
@section('seccion')


<h1 class="display-4 mb-5">Actualizando datos del informe {{$informe->id}}:
<a href="{{route('ruta_informe')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>
</h1>

<div class="mt-4 pt-4"></div>

@if (session('mensaje'))
  <div class="alert alert-success">
  {{session('mensaje')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif

<form action="{{route('informe_update',$informe->id)}}" method="POST">
@method('PUT')
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
    <input type="string" name="paciente" placeholder="Paciente" class="form-control mb-2" value="{{$informe->paciente}}">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Medico:</label>
    <input type="string" name="medico" placeholder="Medico" class="form-control mb-2" value="{{$informe->medico}}">
    </div>
    </div>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Area:</label>
      <input type="string" name="area" placeholder="Area" class="form-control mb-2" value="{{$informe->area}}">
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tipo:</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="tipo" value="{{$informe->tipo}}">{{$informe->tipo}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tecnica:</label>
    <textarea class="form-control" id="exampleFormControlTextarea5" rows="4" name="tecnica" value="{{$informe->tecnica}}">{{$informe->tecnica}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Diagnostico:</label>
    <textarea class="form-control" id="exampleFormControlTextarea3" rows="6" name="diagnostico" value="{{$informe->diagnostico}}">{{$informe->diagnostico}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Obvservaciones:</label>
    <textarea class="form-control" id="exampleFormControlTextarea4" rows="6" name="obvservaciones" value="{{$informe->obvservaciones}}">{{$informe->obvservaciones}}</textarea>
  </div>
  <button class="btn btn-primary btn-block mt-5 mb-10" type="submit" >Actualizar</button>
</form>

@endsection