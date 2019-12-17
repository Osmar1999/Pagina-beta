@extends('plantilla')
@section('seccion')

<div class="container mb-4">
<div class="row">
    <div class="col">
    <h1 class="display-4">Solicitudes</h1>
    </div>
    <div class="col-5">
    <div class="mt-4">
<form class="form-inline my-2 my-lg-0 " action="{{ route('ruta_solicitud')}}">
      <input class="form-control mr-sm-2 mr-auto ml-auto" type="search" placeholder="Solicitante" aria-label="Search" name="buscar">
      
      <button class="btn btn-outline-success my-2 my-sm-0 mr-auto " type="submit">Buscar</button>
</form>
</div>
    </div>
    <div class="col">
    <a href="{{ route('solicitud_agregar')}}" class="btn btn-primary float-right mt-3">Nuevo</a>
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
      <th scope="col">Solicitante</th>
      <th scope="col">Nivel</th>
      <th scope="col">Area</th>
      <th scope="col">Fecha</th>
      <th scope="col">Botones</th>
    </tr>
  </thead>
  <tbody>

  @foreach($solicitudes as $solicitud)

    <tr>
      <th scope="row">{{$solicitud->id}}</th>
      <td><a href="{{route('solicitud_detalles',$solicitud)}}">{{$solicitud->solicitante}}</a></td>
      <td>{{$solicitud->nivel}}</td>
      <td>{{$solicitud->area}}</td>
      <td>{{$solicitud->fecha}}</td>
      <td>
      <a href="{{route('solicitud_editar', $solicitud)}}" class="btn btn-success btn-sm">Editar</a>
      <form action="{{route('soliciud.eliminar',$solicitud)}}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>

  @endforeach
  </tbody>
</table>

{{ $solicitudes->links() }} 
@endsection