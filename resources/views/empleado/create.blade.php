@extends('layouts.cuerpo')


@section('hijos')
<h1>Crear nuevo empleado</h1>


<div class="row">
<div class="col">

<form action="/empleado" class= "form-control" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre del empleado</label>
  <input type="text" class="form-control" id="nombre"  name="nombre">
</div>



<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/portada" class="btn btn-danger">Cancelar</a>

</div>





</div>


</div>
</form>
</form>
@endsection