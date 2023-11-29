@extends('layouts.cuerpo')

@section('hijos')



<a href="empleado/create"class="btn btn-success">Crear</a>
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
                <th>id del departamento</th>
                
            </tr>

        <tbody>
        
        @foreach ($espe as $espes)
            <tr>
                <th>{{$espes->id}}</th>
                <th>{{$espes->nombre}}</th>
                <th>{{$espes->apellido}}</th>
                <th>{{$espes->fecha_nac}}</th>
                <th>{{$espes->id_genero}}</th>
                <th>{{$espes->id_departamento}}</th>
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection