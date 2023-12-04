@extends('layouts.cuerpo')

@section('hijos')


<div style="display: flex; justify-content: space-between;">
<a href="proveedores/create"class="btn btn-success">Crear</a>
        <a href="/medicamento" class="btn btn-info">Medicamentos</a>
    </div>

<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de proveedores</h1>


    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>

        <tbody>
        
        @foreach ($proveedores as $proveedore)
            <tr>
                <th>{{$proveedore->id}}</th>
                <th>{{$proveedore->nombre}}</th>
                <th>{{$proveedore->descripcion}}</th>
                <th>

                
                 <form action="/proveedores/{{{$proveedore->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/proveedores/{{$proveedore->id}}/edit"class="btn btn-primary">Editar</a>

                 <button type="submit" class = "btn btn-danger">Eliminar </button>

                </form>
                </th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>
    
    <div class="text-center" style="margin-top: 20px;">
        <a href="/portada" class="btn btn-danger btn-lg">Volver</a>
    </div>





@endsection