@extends('plantilla')
@section('seccion')



<div class="card  ml-auto mr-auto mt-5" style="max-width: 800px; background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(224,248,201,1) 100%); ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="pictures/{{$medico->avatar}}"   class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Detalles del medico {{$medico->nombre}}</h5>
        <p class="card-text"><b>ID: </b>{{$medico->id}}</p>
        <p class="card-text"><b>Nombre Completo: </b>{{$medico->nombre}}</p>
        <p class="card-text"><b>Especialidad: </b>{{$medico->especialidad}}</p>
        <p class="card-text"><small class="text-muted">Telefono: {{$medico->telefono}}</small></p>
      </div>
    </div>
  </div>
  <a href="{{route('ruta_medico')}}" class="btn btn-success btn-lg float-right" style="background:#29C837">Volver</a>
</div>

@endsection