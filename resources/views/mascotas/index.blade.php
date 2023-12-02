@extends('layouts.cuerpo')

@section('hijos')



<a href="mascota/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de Mascotas</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>id_especialidad</th>
                <th>tipo</th>
                <th>fecha de naciemiento</th>
                <th>Id_Cliente</th>
                <th>tipo</th>

                
            </tr>

        <tbody>
        
        @foreach ($mascota as $mascotas)
            <tr>
                <th>{{$mascotas->id}}</th>
                <th>{{$mascotas->nombre_mascota}}</th>
                <th>{{$mascotas->id_especialidad}}</th>
                <th>{{$mascotas->fecha_nac}}</th>
                <th>{{$mascotas->id_cli}}</th>
                <th>{{$mascotas->tipo_mascotas_nombre}}</th>
            
            <th>
                <br>
            </br>
            <form action="/mascota/{{{$mascotas->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/mascota/{{$mascotas->id}}/edit"class="btn btn-primary">Editar</a>
                 <button type="submit" class = "btn btn-primary">Eliminar </button>
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection