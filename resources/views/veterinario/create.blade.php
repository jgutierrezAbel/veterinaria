@extends('layouts.cuerpo')

@section('hijos')

<h1>Crear Veterinario</h1>

<div class="row">
  <div class="col">

    <form action="/veterinario" class="form-control" method="POST">
    @csrf


      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del veterinario</label>
        <input type="text" class="form-control" id="nombre"name="nombre">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido del veterinario</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
      </div>

      
      <div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>


      
     

      <div class="mb-3">
        <label for="id_genero" class="form-label">Género del veterinario</label>
        <div>
          <input type="radio" id="masculino" value="masculino" name="id_genero">
          <label for="masculino">Masculino</label>
        </div>
        <div>
          <input type="radio" id="femenino" value="femenino" name="id_genero">
          <label for="femenino">Femenino</label>
        </div>
      </div>


 <div class="mb-3">
<label for="nacio" class="form-label">seleccione la nacionalidad</label>
                
 <select class="form-control" id="nacio" name="nacio">
 <option value="">Seleccione una nacionalidad</option>
    @foreach ($nacio as $item)
  <option value="{{ $item->id }}">{{ $item->nacionalidad }}</option>
  @endforeach
  </select>
</div>

<div class="mb-3">
<label for="espe" class="form-label">seleccione la especialidad</label>
                
 <select class="form-control" id="espe" name="espe">
 <option value="">Seleccione una especialidad</option>
    @foreach ($espe as $item)
  <option value="{{ $item->id }}">{{ $item->tipo_especialidad }}</option>
  @endforeach
  </select>
</div>










      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/veterinario" class="btn btn-danger">Cancelar</a>
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