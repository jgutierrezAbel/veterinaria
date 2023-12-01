@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar Nacionalidad</h1>

<div class="row">
<div class="col">

<form action="/nacionalidad/{{$editarnacionalidad->id}}" class= "form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Nacionalidad</label>
  <input type="text" class="form-control" id="nacionalidad" value="{{$editarnacionalidad->nacionalidad}}" name="nacionalidad">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/nacionalidad" class="btn btn-danger">Cancelar</a>

</div>



</form>

</div>


</div>

</form>

@endsection