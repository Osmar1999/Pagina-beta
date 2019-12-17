@extends('plantilla')
@section('seccion')

<h1 class="display-4 nb-3">Nuevo Medico
<a href="{{route('ruta_medico')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>
</h1>
<h1 class="display-4 nb-3">Llenar los siguientes datos...</h1>

@if (session('mensaje'))
  <div class="alert alert-success">
  {{session('mensaje')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif


<form method="POST" action="{{route('medico.crear')}}"  enctype="multipart/form-data" >
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
    Error en el campo "Especialidad"
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


<div class="form-group">
    <label for="formGroupExampleInput">Nombre:</label>
      <input type="string" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ old ('nombre')}}">
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Especialidad</label>
      <input type="string" name="especialidad" placeholder="Especialidad" class="form-control mb-2" value="{{ old ('especialidad')}}">
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Telefono:</label>
      <input type="string" name="telefono" placeholder="Telefono" class="form-control mb-2" value="{{ old ('telefono')}}" >
</div>

<h6>Perfil</h6>
<input accept="image/*" type="file" name="avatar" />
<button class="btn btn-primary btn-block mt-5" type="submit" >Agregar</button>
</form>
@endsection