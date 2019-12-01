@extends('plantilla')
@section('seccion')
<h1>Medicos
<a href="{{ route('medico_agregar')}}" class="btn btn-primary">Nuevo</a>
</h1>



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
      <a href="{{route('medico_editar', $medico)}}" class="btn btn-warning btn-sm">Editar</a>
      </td>
    </tr>   
    @endforeach

  </tbody>
</table>
@endsection