@extends('plantilla')
@section('seccion')



<div class="card  ml-auto mr-auto mt-5" style="max-width: 800px; background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(254,148,203,1) 100%); ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagenes/edificio.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Solicitud N°:{{$solicitud->id}}</h5>
        <p class="card-text"><b>ID: </b>{{$solicitud->id}}</p>
        <p class="card-text"><b>N°Camilla: </b>{{$solicitud->numeroCamilla}}</p>
        <p class="card-text"><b>N° Habitacion: </b>{{$solicitud->numeroHabitacion}}</p>
        <p class="card-text"><b>Nivel: </b>{{$solicitud->nivel}}</p>
        <p class="card-text"><b>Solicitante: </b>{{$solicitud->solicitante}}</p>
        <p class="card-text"><b>Area: </b>{{$solicitud->area}}</p>
        <p class="card-text"><b>Tipo: </b>{{$solicitud->tipo}}</p>
        <p class="card-text"><b>Diagnostico: </b>{{$solicitud->diagnostico}}</p>
        <p class="card-text"><small class="text-muted">Fecha: {{$solicitud->fecha}}</small></p>
        
    </div>
  </div>
</div>
<a href="{{route('ruta_solicitud')}}" class="btn btn-success btn-lg float-right" style="background:#6BEB3A">Volver</a>
</div>

@endsection