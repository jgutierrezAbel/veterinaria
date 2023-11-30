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
    <label for="fecha_nac" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
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

            <div>
                <div class="mb-3">
                <label for="id_departamento" class="form-label">Departamento</label>
                
                <select class="form-control" id="id_departamento" name="id_departamento">
                      <option value="">Seleccione departamento</option>
                      @foreach ($depto as $item)
                      <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                      @endforeach
                    </select>
</div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/empleado" class="btn btn-danger">Cancelar</a>
            </div>
        </form>

    </div>
</div>

<script>
        const inputFecha = document.getElementById('fecha_nac');

        inputFecha.addEventListener('input', function(e) {
            let inputValue = e.target.value.replace(/\D/g, '');
            if (inputValue.length > 4) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6) + '-' + inputValue.slice(6, 8);
            } else if (inputValue.length > 6) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6);
            }
            e.target.value = inputValue;
        });
    </script>
@endsection