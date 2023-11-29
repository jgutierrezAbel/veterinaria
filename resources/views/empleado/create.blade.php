@extends('layouts.cuerpo')

@section('hijos')
<h1>Crear nuevo empleado</h1>

<div class="row">
    <div class="col">

        <form action="/empleado" class="form-control" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del empleado</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido del empleado</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>

            <div class="mb-3">
                <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                <input type="text" class="form-control datepicker" id="fecha_nac" name="fecha_nac">
            </div>

            <div class="mb-3">
                <label for="id_genero" class="form-label">Género del empleado</label>
                <div>
                    <input type="radio" id="masculino" name="id_genero" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                    <input type="radio" id="femenino" name="id_genero" value="femenino">
                    <label for="femenino">Femenino</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="id_departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="id_departamento" name="id_departamento">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/portada" class="btn btn-danger">Cancelar</a>
            </div>
        </form>

    </div>
</div>

<!-- Asegúrate de incluir los scripts necesarios, como el de Bootstrap-datepicker si aún no lo has hecho -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

<script>
    // Inicializa el datepicker para el campo de fecha de nacimiento
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endsection