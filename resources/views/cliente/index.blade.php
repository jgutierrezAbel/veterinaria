@extends('layouts.cuerpo')

@section('hijos')



<a href="cliente/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de clientes</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fecha de naciemiento</th>
                <th>género</th>
                <th>nacionalidad</th>
                
            </tr>

        <tbody>
        
        @foreach ($cliente as $emplea)
            <tr>
                <th>{{$emplea->id}}</th>
                <th>{{$emplea->nombre}}</th>
                <th>{{$emplea->apellido}}</th>
                <th>{{$emplea->fecha_naci}}</th>
                <th>{{$emplea->id_genero}}</th>
                <th>{{$emplea->id_nacionalidad}}</th>
                
                
            
            <th>
            <form action="/cliente/{{{$emplea->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/cliente/{{$emplea->id}}/edit"class="btn btn-primary">Editar</a>

                 <button type="submit" class = "btn btn-warning">Eliminar </button>
                 
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection