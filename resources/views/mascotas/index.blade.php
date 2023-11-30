@extends('layouts.cuerpo')

@section('hijos')



<a href="mascota/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de empleados</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fecha de naciemiento</th>
                <th>género</th>
                
                <th>Departamento al que pertenece</th>
                
            </tr>

        <tbody>
        
        @foreach ($emple as $emplea)
            <tr>
                <th>{{$emplea->id}}</th>
                <th>{{$emplea->nombre}}</th>
                <th>{{$emplea->apellido}}</th>
                <th>{{$emplea->fecha_nac}}</th>
                <th>{{$emplea->id_genero}}</th>
                
                <th>{{$emplea->departamento_nombre}}</th>
            
            <th>
            <form action="/empleado/{{{$emplea->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/empleado/{{$emplea->id}}/edit"class="btn btn-primary">Editar</a>
                 <a href="/empleado/{{$emplea->id}}" class="btn btn-danger">Eliminar</a>
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection