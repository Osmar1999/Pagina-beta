@extends('plantilla')
@section('seccion')

<h1 class="display-4">Nuevo Paciente
<a href="{{route('ruta_paciente')}}" class="btn btn-success btn-lg float-right mr-4 mt-5">Volver</a>  
</h1>
<h1 class="display-4 ">Llenar los siguientes datos...</h1>
<div class="mt-4 pt-4"></div>

@if (session('mensaje'))
  <div class="alert alert-success">
  {{session('mensaje')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif

<form action="{{route('paciente.crear')}}" method="POST" enctype="multipart/form-data">
  @csrf

  @error('numeroHistoria')
    <div class="alert alert-danger">
    Error en el campo "N° Historia"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('nombre')
    <div class="alert alert-danger">
    Error en el campo "Nombre"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('apellidoMaterno')
    <div class="alert alert-danger">
    Error en el campo "Apellido Paterno"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('apellidoPaterno')
    <div class="alert alert-danger">
    Error en el campo "Apellido Materno"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('sexo')
    <div class="alert alert-danger">
    Error en el campo "Sexo"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('nacimiento')
    <div class="alert alert-danger">
    Error en el campo "Nacimiento"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('carnet')
    <div class="alert alert-danger">
    Error en el campo "Carnet"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('nacionalidad')
    <div class="alert alert-danger">
    Error en el campo "Nacionalidad"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('departamento')
    <div class="alert alert-danger">
    Error en el campo "Departamento"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('provincia')
    <div class="alert alert-danger">
    Error en el campo "Provincia"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('ciudad')
    <div class="alert alert-danger">
    Error en el campo "Ciudad"
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@enderror

@error('direccion')
    <div class="alert alert-danger">
    Error en el campo "Direccion"
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

  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">N° Historia:</label>
    <input type="string" name="numeroHistoria" placeholder="N° Historia" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Nombre:</label>
    <input type="string" name="nombre" placeholder="Nombre" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Apellido Paterno:</label>
    <input type="string" name="apellidoPaterno" placeholder="Apellido Paterno" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Apellido Materno:</label>
    <input type="string" name="apellidoMaterno" placeholder="Apellido Materno" class="form-control mb-2">
    </div>
    </div>
  </div>

  <div class="row">
  <div class="col">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Sexo:</label>
    <select class="form-control" id="exampleFormControlSelect2" name="sexo">
      <option>Hombre</option>
      <option>Mujer</option>
    </select>
  </div>
  </div>
  <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Fecha de Nacimiento:</label>
    <input type="date" name="nacimiento" placeholder="Fecha de nacimiento" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Carnet de Identidad:</label>
    <input type="number" name="carnet" placeholder="CI" class="form-control mb-2">
    </div>
    </div>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Nacionalidad:</label>
      <input type="string" name="nacionalidad" placeholder="Nacionalidad" class="form-control mb-2">
</div>

<div class="row">
  <div class="col">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Departamento:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="departamento">
      <option>Cochabamba</option>
      <option>Santa Cruz</option>
      <option>La Paz</option>
    </select>
  </div>
  </div>
  <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Provincia:</label>
    <input type="string" name="provincia" placeholder="Provincia" class="form-control mb-2">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Ciudad:</label>
    <input type="string" name="ciudad" placeholder="Ciudad" class="form-control mb-2">
    </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Direccion:</label>
      <input type="string" name="direccion" placeholder="Direccion" class="form-control mb-2">
</div>


  <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="formGroupExampleInput">Telefono:</label>
    <input type="number" name="telefono" placeholder="telefono" class="form-control mb-2">
    </div>
    </div>
  
  </div>
  <h6>Perfil</h6>
<input accept="image/*" type="file" name="avatar"/>
  <button class="btn btn-primary btn-block mt-5 mb-10" type="submit" >Agregar</button>
</form>

@endsection