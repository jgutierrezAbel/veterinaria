@extends('layouts.cuerpo')

@section('hijos')
<h1>Agregar nuevas especialidades</h1>

<div class="row">
<div class="col">

<form action="/especialidades" class= "form-control" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Tipo Especialidad</label>
  <input type="text" class="form-control" id="tipo"  name="tipo">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input type="text" class="form-control" id="descripcion"  name="descripcion">
</div>



<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/especialidades" class="btn btn-danger">Cancelar</a>

</div>

</div>

</div>
</form>
</form>
@endsection