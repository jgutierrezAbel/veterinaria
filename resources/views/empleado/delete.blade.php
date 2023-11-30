@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar proveedor</h1>

<div class="row">
<div class="col">

<form action="/empleado/{{$empleadoEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
  <label for="" class="form-label">Nombre del empleado</label>
  <input type="text" class="form-control" id="nombre" value="{{$empleadoEliminar->nombre}}" name="nombre">
</div>

<div class="mb-3">
  <label for="" class="form-label">Apellido del empleado</label>
  <input type="text" class="form-control" id="apellido" value="{{$empleadoEliminar->apellido}}" name="apellido">
</div>

<div class="mb-3">
  <label for="" class="form-label">Fecha de nacimiento</label>
  <input type="text" class="form-control datepicker" id="fecha_nac" value="{{$empleadoEliminar->fecha_nac}}" name="fecha_nac">
</div>

<div class="mb-3">
                <label for="id_genero" class="form-label">Género del empleado</label>
               @if ($empleadoEliminar->id_genero=="masculino")
               <div>
                    <input type="radio" id="masculino" checked value="{{$empleadoEliminar->id_genero}}" name="id_genero" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                <input type="radio" id="femenino" name="id_genero" value="femenino">
                    <label for="femenino">Femenino</label>
                </div>
               @else
               <div>
                    <input type="radio" id="masculino" value="{{$empleadoEliminar->id_genero}}" name="id_genero" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                <input type="radio" id="femenino" checked name="id_genero" value="femenino">
                    <label for="femenino">Femenino</label>
                </div>
               @endif


<div class="mb-3">
  <label for="" class="form-label">Departamento</label>
  <input type="text" class="form-control datepicker" id="fecha_nac" value="{{$empleadoEliminar->id_departamento}}" name="id_departamento">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/empleado" class="btn btn-warning">Cancelar</a>

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
</form>
@endsection