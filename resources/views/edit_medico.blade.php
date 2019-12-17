@extends('plantilla')
@section('seccion')

<h1 class="display-4 mb-5">Actualizando datos de {{$medico->nombre}}...
<a href="{{route('ruta_medico')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>
</h1>

@if (session('mensaje2'))
    <div class="alert alert-success">
    {{session('mensaje2')}}
@endif

<form method="POST" action="{{route('medico_update',$medico)}}" >
@method('PUT')
@csrf

@error('nombre')
    <div class="alert alert-danger">
    Error en el campo "Nombre"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('especialidad')
    <div class="alert alert-danger">
    Error en el campo "especialidad"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('telefono')
    <div class="alert alert-danger">
    Error en el campo "Telefono"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

<input type="string" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$medico->nombre}}">
<input type="string" name="especialidad" placeholder="Especialidad" class="form-control mb-2" value="{{$medico->especialidad}}">
<input type="string" name="telefono" placeholder="Telefono" class="form-control mb-2" value="{{$medico->telefono}}" >
<button class="btn btn-primary btn-block" type="submit" >Actualizar</button>
</form>
@endsection

