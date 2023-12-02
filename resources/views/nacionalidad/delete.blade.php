@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar nacionalidad</h1>

<div class="row">
<div class="col">

<form action="/nacionalidad/{{$NacionalidadEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nacionalidad</label>
  <input type="text" class="form-control" id="nacionalidad" value="{{$NacionalidadEliminar->nacionalidad}}" name="nacionalidad">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/nacionalidad" class="btn btn-warning">Cancelar</a>

</div>

@endsection
