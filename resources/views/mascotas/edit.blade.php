@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar Mascotas</h1>

<div class="row">
<div class="col">

<form action="/mascota/{{$editarmascota->id}}" class= "form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre_mascota" value="{{$editarmascota->nombre_mascota}}" name="nombre_mascota">
</div>

<div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fecha_nac" value="{{$editarmascota->fecha_nac}}" name="fecha_nac" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>



<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/mascota" class="btn btn-danger">Cancelar</a>

</div>



</form>

</div>


</div>

</form>
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