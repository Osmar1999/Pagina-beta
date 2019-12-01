@extends('plantilla')
@section('seccion')
@if (session('mensaje'))
    <div class="alert alert-success">
    {{session('mensaje')}}
@endif
<br/><br/>
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

<form method="POST" action="{{route('medico.crear')}}" >
@csrf
<input type="string" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ old ('nombre')}}">
<input type="string" name="especialidad" placeholder="Especialidad" class="form-control mb-2" value="{{ old ('especialidad')}}">
<input type="string" name="telefono" placeholder="Telefono" class="form-control mb-2" value="{{ old ('telefono')}}" >
<button class="btn btn-primary btn-block" type="submit" >Agregar</button>
</form>
@endsection