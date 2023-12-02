@extends('layouts.cuerpo')


@section('hijos')
<h1>Agregar nuevo tratamiento</h1>

<div class="row">
<div class="col">

<form action="/tratamiento" class= "form-control" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombretratamiento"  name="nombretratamiento">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripción</label>
  <input type="text" class="form-control" id="descripcion"  name="descripcion">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id del cliente</label>
  <input type="text" class="form-control" id="id_cita"  name="id_cita">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/tratamiento" class="btn btn-danger">Cancelar</a>

@endsection