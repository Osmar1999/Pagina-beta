@extends('plantilla')
@section('seccion')

<div class="card  ml-auto mr-auto mt-5" style="max-width: 800px; background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(224,248,201,1) 100%); ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagenes/edificio.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Detalles del informe N° {{$informe->id}}</h5>
        <p class="card-text"><b>ID: </b>{{$informe->id}}</p>
        <p class="card-text">Tipo: {{$informe->tipo}}</p>
        <p class="card-text"><b>Tecnica: </b>{{$informe->tecnica}}</p>
        <p class="card-text"><b>Paciente: </b>{{$informe->paciente}}</p>
        <p class="card-text"><b>Medico: </b>{{$informe->medico}}</p>
        <p class="card-text"><b>Diagnostico: </b>{{$informe->diagnostico}}</p>
        <p class="card-text"><b>Obvservaciones: </b>{{$informe->obvservaciones}}</p>
        <p class="card-text"><b>Area: </b>{{$informe->area}}</p>
        <p class="card-text"><small class="text-muted">Fecha: {{$informe->created_at}}</small></p>
      </div>
    </div>
  </div>
  <a href="{{route('ruta_informe')}}" class="btn btn-success btn-lg float-right" style="background:#6BEB3A">Volver</a>
</div>

@endsection