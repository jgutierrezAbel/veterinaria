@extends('layouts.cuerpo')

@section('hijos')


<div style="display: flex; justify-content: space-between;">
<a href="cliente/create"class="btn btn-success">Crear</a>
        <a href="/nacionalidad" class="btn btn-info">Nacionalidades</a>
    </div>
    
<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de clientes</h1>

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