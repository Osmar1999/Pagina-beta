@extends('plantilla')
@section('seccion')

<div class="container mb-4">
<div class="row">
    <div class="col">
    <h1 class="display-4">Pacientes</h1>
    </div>
    <div class="col-5">
    <div class="mt-4">
<form class="form-inline my-2 my-lg-0 " action="{{ route('ruta_paciente')}}">
      <input class="form-control mr-sm-2 mr-auto ml-auto" type="search" placeholder="Nombre" aria-label="Search" name="buscar">
      
      <button class="btn btn-outline-success my-2 my-sm-0 mr-auto " type="submit">Buscar</button>
</form>
</div>
    </div>
    <div class="col">
    <a href="{{ route('paciente_agregar')}}" class="btn btn-primary float-right mt-3">Nuevo</a>
    </div>
  </div>
</div>



<h5>
@if (session('mensaje'))
    <div class="alert alert-success">
    {{session('mensaje')}}
@endif
</h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido P</th>
      <th scope="col">Apellido M</th>
      <th scope="col">CI</th>
      <th scope="col">Botones</th>
    </tr>
  </thead>
  <tbody>

  @foreach($pacientes as $paciente)

    <tr>
      <th scope="row">{{$paciente->id}}</th>
      <td><a href="{{route('paciente_detalles',$paciente)}}">{{$paciente->nombre}}</a></td>
      <td>{{$paciente->apellidoPaterno}}</td>
      <td>{{$paciente->apellidoMaterno}}</td>
      <td>{{$paciente->carnet}}</td>
      <td>
      <a href="{{route('paciente.editar', $paciente)}}" class="btn btn-success btn-sm" >Editar</a>
      <form action="{{route('paciente.eliminar',$paciente)}}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>

  @endforeach
  </tbody>
</table>

{{ $pacientes->links() }} 
@endsection