@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar proveedor</h1>

<div class="row">
<div class="col">

<form action="/proveedores/{{$proveedorEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$proveedorEliminar->tipo_mascota}}" name="nombre">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input type="text" class="form-control" id="apellido" value="{{$proveedorEliminar->tipo_mascota}}" name="descripcion">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/proveedores" class="btn btn-warning">Cancelar</a>

</div>

@endsection
