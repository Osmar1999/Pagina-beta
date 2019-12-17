@extends('plantilla')
@section('seccion')

<div class="container mb-4">
<div class="row">
    <div class="col">
    <h1 class="display-4">Informes</h1>
    </div>
    <div class="col-5">
    <div class="mt-4">
<form class="form-inline my-2 my-lg-0 " action="{{ route('ruta_informe')}}">
      <input class="form-control mr-sm-2 mr-auto ml-auto" type="search" placeholder="Paciente" aria-label="Search" name="buscar">
      
      <button class="btn btn-outline-success my-2 my-sm-0 mr-auto " type="submit">Buscar</button>
</form>
</div>
    </div>
    <div class="col">
    <a href="{{ route('informe_agregar')}}" class="btn btn-primary float-right mt-3">Nuevo</a>
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
      <th scope="col">Paciente</th>
      <th scope="col">Medico</th>
      <th scope="col">Fecha</th>
      <th scope="col">Area</th>
      <th scope="col">Botones</th>
    </tr>
  </thead>
  <tbody>

  @foreach($informes as $informe)

    <tr>
      <th scope="row">{{$informe->id}}</th>
      <td><a href="{{route('detalle_informe',$informe)}}">{{$informe->paciente}}</a></td>
      <td><a href="{{route('detalle_informe',$informe)}}">{{$informe->medico}}</td>
      <td>{{$informe->created_at}}</td>
      <td>{{$informe->area}}</td>
      <td>
      <a href="{{route('informe.pdf',$informe)}}"class="btn btn-success btn-sm" style="background:#DA4447">PDF</a>
      <a href="{{route('ver_imagen', $informe)}}" class="btn btn-sm" style="color:#fff; background:#2C88DA">Imagenes</a>
      <a href="{{route('informe_editar', $informe)}}" class="btn btn-success btn-sm">Editar</a>
      <form action="{{route('informe.eliminar',$informe)}}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>

  @endforeach
  </tbody>
</table>

{{ $informes->links() }} 
@endsection