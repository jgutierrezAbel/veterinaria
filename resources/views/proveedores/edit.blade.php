<h1>Hola Ramiro</h1>

@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar proveedor</h1>

<div class="row">
<div class="col">

<form action="/proveedores/{{$editarcli->id}}" class= "form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$editarcli->nombre}}" name="nombre">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="apellido" value="{{$editarcli->descripcion}}" name="apellido">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>

</div>



</form>

</div>


</div>

</form>
@endsection