@extends('layouts.cuerpo')


@section('hijos')
<h1>Agregar Nacionalidad</h1>

<div class="row">
<div class="col">

<form action="/nacionalidad" class= "form-control" method="POST">
@csrf

<div class="mb-3">
  <label for="" class="form-label">Nacionalidad</label>
  <input type="text" class="form-control" id="nacionalidad"  name="nacionalidad">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/nacionalidad" class="btn btn-danger">Cancelar</a>

</div>
</div>
</div>
</form>
</form>

@endsection


