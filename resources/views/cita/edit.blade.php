@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar cita</h1>

<div class="row">
<div class="col">

<form action="/cita/{{$citaEditar->id}}" class= "form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de la cita (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fechacita" value="{{$citaEditar->fechacita}}" name="fechacita" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>

<div class="mb-3">
    <label for="horacita" class="form-label">Hora de la cita (HH:MM)</label>
    <input type="text" class="form-control" id="horacita" value="{{$citaEditar->horacita}}" name="horacita" pattern="\d{2}:\d{2}" title="Por favor ingrese una hora en formato HH:MM">
</div>


<div class="mb-3">
  <label for="" class="form-label">Id de la mascota</label>
  <input type="text" class="form-control" id="descripcion" value="{{$citaEditar->descripcion}}" name="descripcion">
</div>


<div class="mb-3">
        <label for="cli" class="form-label">cliente</label>
        <select class="form-control" id="cli" name="cli">
          @foreach ($cli as $item)
            <option value="{{ $item->id }}" {{$citaEditar->id_cli == $item->id ? 'selected' : ''}}>
              {{ $item->nombre }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="mas" class="form-label">Mascota</label>
        <select class="form-control" id="mas" name="mas">
          @foreach ($mas as $item)
            <option value="{{ $item->id }}" {{$citaEditar->id_mas == $item->id ? 'selected' : ''}}>
              {{ $item->nombre_mascota }}
            </option>
          @endforeach
        </select>
      </div>


      <div class="mb-3">
        <label for="mvet" class="form-label">Veterinario</label>
        <select class="form-control" id="vet" name="vet">
          @foreach ($vet as $item)
            <option value="{{ $item->id }}" {{$citaEditar->id_vet == $item->id ? 'selected' : ''}}>
              {{ $item->nombre }}
            </option>
          @endforeach
        </select>
      </div>









<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/cita" class="btn btn-danger">Cancelar</a>

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