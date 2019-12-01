@extends('plantilla')
@section('seccion')

<h1>Detalles del medico {{$medico->nombre}}<h1>
<h3>ID: {{$medico->id}}</h3>
<h3>Nombre Completo: {{$medico->nombre}}</h3>
<h3>Especialidad: {{$medico->especialidad}}<h3>
<h3>Telefono: {{$medico->telefono}}</h3>

@endsection