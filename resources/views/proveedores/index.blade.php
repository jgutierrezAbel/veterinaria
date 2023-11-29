@extends('layouts.cuerpo')

@section('hijos')



<a href="proveedores/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista proveedores</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
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

                 <button type="submit" class = "btn btn-primary">Eliminar </button>

                </form>
                </th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection