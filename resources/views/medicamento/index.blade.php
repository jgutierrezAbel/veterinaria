@extends('layouts.cuerpo')

@section('hijos')


<div style="display: flex; justify-content: space-between;">
<a href="medicamento/create"class="btn btn-success">Crear</a>
        <a href="/proveedores" class="btn btn-info">Proveedores</a>
    </div>

<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de medicamentos</h1>

    <table  class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del medicamento</th>
                <th>Proveedor</th>
                <th>Descripción</th>
                <th>Fecha de lote</th>
                <th>Fecha de vencimiento</th>
                <th>En inventario</th>           
            </tr>

        <tbody>
        
        @foreach ($medicamento as $medicamentos)
            <tr>
                <th>{{$medicamentos->id}}</th>
                <th>{{$medicamentos->nombremed}}</th>
                <th>{{$medicamentos->proveedor}}</th>
                <th>{{$medicamentos->descripcion}}</th>
                <th>{{$medicamentos->lote}}</th>
                <th>{{$medicamentos->vencimiento}}</th>
                <th>{{$medicamentos->cantidad}}</th>
            
            <th>
            <form action="/medicamento/{{{$medicamentos->id}}}" method="post">

                    @csrf
                    @method('DELETE')
                 <a href="/medicamento/{{$medicamentos->id}}/edit"class="btn btn-primary">Editar</a>
                 <a href="/medicamento/{{$medicamentos->id}}/"class="btn btn-danger">Elimar</a>
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>

    <div class="text-center" style="margin-top: 20px;">
        <a href="/tratamiento" class="btn btn-danger btn-lg">Volver</a>
    </div>
















@endsection