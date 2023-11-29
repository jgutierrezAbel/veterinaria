@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar Tipo Mascota</h1>

<div class="row">
<div class="col">

<form action="/tipomascota/{{$TipomascotaEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$TipomascotaEliminar->tipo_mascota}}" name="tipo">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="apellido" value="{{$TipomascotaEliminar->descripcion}}" name="descripcion">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/tipomascota" class="btn btn-warning">Cancelar</a>

</div>



</form>

</div>


</div>

</form>
@endsection