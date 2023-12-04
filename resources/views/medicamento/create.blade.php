@extends('layouts.cuerpo')

@section('hijos')
<h1>Agregar medicamento</h1>

<div class="row">
<div class="col">

<form action="/medicamento" class="form-control" method="POST">
@csrf

<div class="mb-3">
<label for="nombremed" class="form-label">Nombre</label>
<input type="text" class="form-control" id="nombremed" name="nombremed">
</div>

<div class="mb-3">
<label for="pro" class="form-label">Proveedor</label>
<select class="form-control" id="pro" name="pro">
<option value="">Seleccione el proveedor</option>
@foreach ($pro as $item)
<option value="{{ $item->nombre}}">{{$item->nombre}}</option>
@endforeach
</select>
</div>

<div class="mb-3">
<label for="descripcion" class="form-label">Descripción</label>
<input type="text" class="form-control" id="descripcion" name="descripcion">
</div>

<div class="mb-3">
<label for="lote" class="form-label">Fecha de lote (YYYY-MM-DD)</label>
<input type="text" class="form-control" id="lote" name="lote" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>

<div class="mb-3">
<label for="vencimiento" class="form-label">Fecha de vencimiento (YYYY-MM-DD)</label>
<input type="text" class="form-control" id="vencimiento" name="vencimiento" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>

<div class="mb-3">
<label for="cantidad" class="form-label">En inventario</label>
<input type="text" class="form-control" id="cantidad" name="cantidad">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-primary">Guardar</button>
<a href="/medicamento" class="btn btn-danger">Cancelar</a>
</div>

</form>

<script>
    const inputLote = document.getElementById('lote');
    const inputVencimiento = document.getElementById('vencimiento');

    function formatInputDate(e) {
        let inputValue = e.target.value.replace(/\D/g, '');
        if (inputValue.length > 4) {
            inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6) + '-' + inputValue.slice(6, 8);
        } else if (inputValue.length > 6) {
            inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6);
        }
        e.target.value = inputValue;
    }

    inputLote.addEventListener('input', formatInputDate);
    inputVencimiento.addEventListener('input', formatInputDate);
</script>

</div>
</div>
@endsection
