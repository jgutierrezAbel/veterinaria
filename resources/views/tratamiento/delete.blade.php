@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar tratamiento</h1>

<div class="row">
<div class="col">

<form action="/tratamiento/{{$tratamientoEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombretratamiento" value="{{$tratamientoEliminar->nombretratamiento}}"  name="nombretratamiento">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripción</label>
  <input type="text" class="form-control" id="descripcion" value="{{$tratamientoEliminar->descripcion}}" name="descripcion">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id de la cita</label>
  <input type="text" class="form-control" id="id_cita" value="{{$tratamientoEliminar->id_cita}}" name="id_cita">
</div>

<div class="mb-3">
  <label for="" class="form-label">Medicamento</label>
  <input type="text" class="form-control" id="medicamento" value="{{$tratamientoEliminar->medicamento}}" name="medicamento">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/tratamiento" class="btn btn-warning">Cancelar</a>

</div>

@endsection
