@extends('layouts.cuerpo')

@section('hijos')

<h1>Editar medicamento</h1>

<div class="row">
<div class="col">

<form action="/medicamento/{{$medicamentoEditar->id}}" class="form-control" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="nombremed" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombremed" value="{{$medicamentoEditar->nombremed}}" name="nombremed">
</div>

<div class="mb-3">
<label for="pro" class="form-label">Proveedor</label>
<select class="form-control" id="pro" name="pro">
<option value="">Seleccione el proveedor</option>
@foreach ($pro as $item)
<option value="{{ $item->nombre}}" @if($item->nombre === $medicamentoEditar->proveedor) selected @endif>{{ $item->nombre}}</option>
@endforeach
</select>
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <input type="text" class="form-control" id="descripcion" value="{{$medicamentoEditar->descripcion}}" name="descripcion">
</div>

<div class="mb-3">
  <label for="lote" class="form-label">Fecha de lote</label>
  <input type="text" class="form-control" id="lote" value="{{$medicamentoEditar->lote}}" name="lote">
</div>

<div class="mb-3">
  <label for="vencimiento" class="form-label">Fecha de vencimiento</label>
  <input type="text" class="form-control" id="vencimiento" value="{{$medicamentoEditar->vencimiento}}" name="vencimiento">
</div>

<div class="mb-3">
  <label for="cantidad" class="form-label">En inventario</label>
  <input type="text" class="form-control" id="cantidad" value="{{$medicamentoEditar->cantidad}}" name="cantidad">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/medicamento" class="btn btn-danger">Cancelar</a>
</div>

</form>

</div>

</div>

@endsection
