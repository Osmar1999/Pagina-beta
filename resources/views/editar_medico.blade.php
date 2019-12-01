@extends('plantilla')
@section('seccion')

@if (session('mensaje2'))
    <div class="alert alert-success">
    {{session('mensaje2')}}
@endif

@error('nombre')
    <div class="alert alert-danger">
    El nombre es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('especialidad')
    <div class="alert alert-danger">
    La especialidad es obligatoria
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('telefono')
    <div class="alert alert-danger">
    El telefono es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

<form method="POST" action="{{route('medico_update',$medico)}}" >
@method('PUT')
@csrf
<input type="string" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$medico->nombre}}">
<input type="string" name="especialidad" placeholder="Especialidad" class="form-control mb-2" value="{{$medico->especialidad}}">
<input type="string" name="telefono" placeholder="Telefono" class="form-control mb-2" value="{{$medico->telefono}}" >
<button class="btn btn-primary btn-block" type="submit" >Editar</button>
</form>
@endsection