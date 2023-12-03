@extends('layouts.cuerpo')

@section('hijos')


<div style="display: flex; justify-content: space-between;">
<a href="tipomascota/create"class="btn btn-success">Crear</a>
</div>


<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de tipos de Mascotas</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Epecie de las mascotas</th>
                <th>Descripción</th>
            </tr>

        <tbody>
        
        @foreach ($tipo as $tipe)
            <tr>
                <th>{{$tipe->id}}</th>
                <th>{{$tipe->tipo_mascota}}</th>
                <th>{{$tipe->descripcion}}</th>
                

                <th>

                
                 <form action="/tipomascota/{{{$tipe->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/tipomascota/{{$tipe->id}}/edit"class="btn btn-primary">Editar</a>

                 <a href="/tipomascota/{{$tipe->id}}" class="btn btn-danger">Eliminar</a>

                </form>
                </th>
                


            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>

    <div class="text-center" style="margin-top: 20px;">
        <a href="/mascota" class="btn btn-danger btn-lg">Volver</a>
    </div>
















@endsection