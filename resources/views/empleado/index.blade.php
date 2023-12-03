@extends('layouts.cuerpo')

@section('hijos')



<div style="display: flex; justify-content: space-between;">
    <a href="empleado/create" class="btn btn-success">Crear</a>
    <a href="/departamento" class="btn btn-info">Departamentos</a>
</div>

<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de empleados</h1>
    <table class ="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de naciemiento</th>
                <th>Género</th>
                <th>Departamento</th>
                
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
                 <button type="submit" class = "btn btn-primary">Eliminar</button>
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