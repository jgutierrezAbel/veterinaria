@extends('layouts.cuerpo')

@section('hijos')

<h1>Eliminar cita</h1>

<div class="row">
<div class="col">

<form action="/cita/{{$citaEliminar->id}}" class= "form-control" method="POST">
@csrf
@method('DELETE')

<div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de la cita (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fechacita" value="{{$citaEliminar->fechacita}}" name="fechacita" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>

<div class="mb-3">
    <label for="horacita" class="form-label">Hora de la cita (HH:MM)</label>
    <input type="text" class="form-control" id="horacita" value="{{$citaEliminar->horacita}}" name="horacita">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id del cliente</label>
  <input type="text" class="form-control" id="id_cli" value="{{$citaEliminar->id_cli}}" name="id_cli">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id del veterinario</label>
  <input type="text" class="form-control" id="id_vet" value="{{$citaEliminar->id_vet}}" name="id_vet">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id de la mascota</label>
  <input type="text" class="form-control" id="id_mas" value="{{$citaEliminar->id_mas}}" name="id_mas">
</div>

<div class="mb-3">
  <label for="" class="form-label">Id de la mascota</label>
  <input type="text" class="form-control" id="descripcion" value="{{$citaEliminar->descripcion}}" name="descripcion">
</div>


<div class="mb-3"> 
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="/cita" class="btn btn-warning">Cancelar</a>

</div>

<script>
        const inputFecha = document.getElementById('fechacita');

        inputFecha.addEventListener('input', function(e) {
            let inputValue = e.target.value.replace(/\D/g, '');
            if (inputValue.length > 4) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6) + '-' + inputValue.slice(6, 8);
            } else if (inputValue.length > 6) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6);
            }
            e.target.value = inputValue;
        });

        const inputHora = document.getElementById('horacita');

    inputHora.addEventListener('input', function(e) {
        let inputValue = e.target.value.replace(/\D/g, '');
        if (inputValue.length > 2) {
            inputValue = inputValue.slice(0, 2) + ':' + inputValue.slice(2, 4);
        }
        e.target.value = inputValue;
    });
    </script>

@endsection
