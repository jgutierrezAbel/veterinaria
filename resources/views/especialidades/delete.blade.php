@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar nacionalidad</h1>

<div class="row">
<div class="col">

<form action="/especialidades/{{$especialidadEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$especialidadEliminar->tipo_especialidad}}" name="tipo">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="apellido" value="{{$especialidadEliminar->descripcion}}" name="descripcion">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/especialidades" class="btn btn-warning">Cancelar</a>

</div>


@endsection
