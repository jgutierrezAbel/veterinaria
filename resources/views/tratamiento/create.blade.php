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
<label for="cita" class="form-label">ID de la cita</label>
<select class="form-control" id="cita" name="cita">
<option value="">Seleccione la cita</option>
@foreach ($cita as $item)
<option value="{{$item->id}}">{{$item->fechacita}}</option>
@endforeach
</select>
</div>

<div class="mb-3">
<label for="med" class="form-label">Medicamento</label>
<select class="form-control" id="med" name="med">
<option value="">Seleccione el medicamento</option>
@foreach ($med as $item)
<option value="{{ $item->nombremed}}">{{$item->nombremed}}</option>
@endforeach
</select>
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/tratamiento" class="btn btn-danger">Cancelar</a>

@endsection