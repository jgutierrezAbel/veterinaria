@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar tipo de mascota</h1>

<div class="row">
<div class="col">

<form action="/tipomascota/{{$TipomascotaEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Tipo de Mascota</label>
  <input type="text" class="form-control" id="tipo_mascota" value="{{$TipomascotaEliminar->tipo_mascota}}" name="tipo_mascota">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input type="text" class="form-control" id="descripcion" value="{{$TipomascotaEliminar->descripcion}}"  name="descripcion">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/tipomascota" class="btn btn-warning">Cancelar</a>

</div>

@endsection
