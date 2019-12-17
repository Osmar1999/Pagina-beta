@extends('plantilla')
@section('seccion')


<h1 class="display-4 mb-5">Actualizando datos de la solicitud N° {{$solicitud->id}}:
<a href="{{route('ruta_solicitud')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>
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

<form action="{{route('solicitud_update',$solicitud->id)}}" method="POST">
@method('PUT')
@csrf

@error('numeroCamilla')
    <div class="alert alert-danger">
    El N° de la camilla es obligatoria
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('numeroHabitacion')
    <div class="alert alert-danger">
    El N° de la habitacion es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('nivel')
    <div class="alert alert-danger">
    El nivel es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('solicitante')
    <div class="alert alert-danger">
    El Nombre del solicitante es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('area')
    <div class="alert alert-danger">
    El area es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('tipo')
    <div class="alert alert-danger">
    El tipo de estudio es obligatorio
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

@error('fecha')
    <div class="alert alert-danger">
    La fecha es obligatoria
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror


<div class="row">
  <div class="col">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nivel:</label>
    <select class="form-control" id="exampleFormControlSelect3" name="nivel" value="{{$solicitud->nivel}}">
      <option>Alta</option>
      <option>Media</option>
      <option>Baja</option>
    </select>
  </div>
  </div>
  <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">N° Camilla:</label>
    <input type="number" name="numeroCamilla" placeholder="N° Camilla" class="form-control mb-2" value="{{$solicitud->numeroCamilla}}">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">N° Habitacion:</label>
    <input type="number" name="numeroHabitacion" placeholder="N° Habitacion" class="form-control mb-2" value="{{$solicitud->numeroHabitacion}}">
    </div>
    </div>
  
  </div>

  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Solicitante:</label>
    <input type="string" name="solicitante" placeholder="Solicitante" class="form-control mb-2" value="{{$solicitud->solicitante}}">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Area:</label>
    <input type="string" name="area" placeholder="Area" class="form-control mb-2" value="{{$solicitud->area}}">
    </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Tipo:</label>
    <input type="string" name="tipo" placeholder="Tipo" class="form-control mb-2" value="{{$solicitud->tipo}}">
    </div>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Diagnostico:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="diagnostico" value="{{$solicitud->diagnostico}}"></textarea>
  </div>
  <button class="btn btn-primary btn-block mt-5 mb-10" type="submit" >Actualizar</button>
</form>
@endsection