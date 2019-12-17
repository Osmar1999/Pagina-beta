@extends('plantilla')
@section('seccion')



<div class="card  ml-auto mr-auto mt-5" style="max-width: 800px; background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(213,235,241,0.99) 41%, rgba(149,203,218,0.98) 91%, rgba(149,203,218,0.98) 100%); ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="pictures/{{$paciente->avatar}}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Detalles del paciente {{$paciente->nombre}}</h5>
        <p class="card-text"><b>ID: </b>{{$paciente->id}}</p>
        <p class="card-text"><b>Nombre: </b>{{$paciente->nombre}}</p>
        <p class="card-text"><b>Apellido Paterno: </b>{{$paciente->apellidoPaterno}}</p>
        <p class="card-text"><b>Apellido Materno: </b>{{$paciente->apellidoMaterno}}</p>
        <p class="card-text"><b>Sexo: </b>{{$paciente->sexo}}</p>
        <p class="card-text"><b>Apellido Fecha de Nacimieno: </b>{{$paciente->nacimiento}}</p>
        <p class="card-text"><b>Apellido Paterno: </b>{{$paciente->apellidoPaterno}}</p>
        <p class="card-text"><b>Carnet: </b>{{$paciente->carnet}}</p>
        <p class="card-text"><b>Nacionalidad: </b>{{$paciente->nacionalidad}}</p>
        <p class="card-text"><b>Departamento: </b>{{$paciente->departamento}}</p>
        <p class="card-text"><b>Provincia: </b>{{$paciente->provincia}}</p>
        <p class="card-text"><b>Ciudad: </b>{{$paciente->ciudad}}</p>
        <p class="card-text"><b>Direccion: </b>{{$paciente->direccion}}</p>
        <p class="card-text"><b>N° Historia Clinica: </b>{{$paciente->numeroHistoria}}</p>
        <p class="card-text"><b>Fecha: </b>{{$paciente->created_at}}</p>
        <p class="card-text"><small class="text-muted">Telefono: {{$paciente->telefono}}</small></p>
      </div>
    </div>
  </div>
  <a href="{{route('ruta_paciente')}}" class="btn btn-success btn-lg float-right" style="background:#29C8B2">Volver</a>
</div>

@endsection