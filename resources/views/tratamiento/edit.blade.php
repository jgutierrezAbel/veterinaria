@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar tratamiento</h1>

<div class="row">
<div class="col">

<form action="/tratamiento/{{$tratamientoEditar->id}}" class= "form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombretratamiento" value="{{$tratamientoEditar->nombretratamiento}}"  name="nombretratamiento">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripción</label>
  <input type="text" class="form-control" id="descripcion" value="{{$tratamientoEditar->descripcion}}" name="descripcion">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id de la cita</label>
  <input type="text" class="form-control" id="id_cita" value="{{$tratamientoEditar->id_cita}}" name="id_cita">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/tratamiento" class="btn btn-danger">Cancelar</a>

</div>




</form>

</div>


</div>

</form>

@endsection