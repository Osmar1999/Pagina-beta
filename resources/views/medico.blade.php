@extends('plantilla')
@section('seccion')

<div class="container mb-4">
<div class="row">
    <div class="col">
    <h1 class="display-4">Medicos</h1>
    </div>
    <div class="col-5">
    <div class="mt-4">
<form class="form-inline my-2 my-lg-0 " action="{{ route('ruta_medico')}}">
      <input class="form-control mr-sm-2 mr-auto ml-auto" type="search" placeholder="Nombre" aria-label="Search" name="name">
      
      <button class="btn btn-outline-success my-2 my-sm-0 mr-auto " type="submit">Buscar</button>
</form>
</div>
    </div>
    <div class="col">
    <a href="{{ route('medico_agregar')}}" class="btn btn-primary float-right mt-3">Nuevo</a>
    </div>
  </div>
</div>


<h5>
@if (session('mensaje2'))
    <div class="alert alert-success">
    {{session('mensaje2')}}
@endif
</h5>

<!--Buscador-->

<!--Fin del buscador-->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Botones</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($medicos as $medico)
    
    <tr>
      <th scope="row">{{$medico->id}}</th>
      <td><a href="{{route('medico_detalles',$medico)}}">{{$medico->nombre}}</a></td>
      <td>{{$medico->especialidad}}</td>
      <td>{{$medico->telefono}}</td>
      <td>
        <a href="{{route('medico_editar', $medico)}}" class="btn btn-success btn-sm">Editar</a>
        <form action="{{route('medicos.eliminar',$medico)}}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>   
    @endforeach

  </tbody>
</table>

{{ $medicos->links() }} 
@endsection