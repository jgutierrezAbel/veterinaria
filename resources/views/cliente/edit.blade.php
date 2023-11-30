@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar proveedor</h1>

<div class="row">
  <div class="col">

    <form action="/cliente/{{$editarcli->id}}" class="form-control" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del empleado</label>
        <input type="text" class="form-control" id="nombre" value="{{$editarcli->nombre}}" name="nombre">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido del empleado</label>
        <input type="text" class="form-control" id="apellido" value="{{$editarcli->apellido}}" name="apellido">
      </div>

      <div class="mb-3">
        <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
        <input type="text" class="form-control datepicker" id="fecha_nac" value="{{$editarcli->fecha_naci}}" name="fecha_nac">
      </div>

      <div class="mb-3">
        <label for="id_genero" class="form-label">Género del empleado</label>
        <div>
          <input type="radio" id="masculino" value="masculino" name="id_genero" {{$editarcli->id_genero == 'masculino' ? 'checked' : ''}}>
          <label for="masculino">Masculino</label>
        </div>
        <div>
          <input type="radio" id="femenino" value="femenino" name="id_genero" {{$editarcli->id_genero == 'femenino' ? 'checked' : ''}}>
          <label for="femenino">Femenino</label>
        </div>
      </div>

      

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/cliente" class="btn btn-danger">Cancelar</a>
      </div>
    </form>

  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

<script>
  $(document).ready(function(){
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
  });
</script>

@endsection
