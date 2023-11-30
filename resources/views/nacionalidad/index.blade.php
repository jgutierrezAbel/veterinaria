@extends('layouts.cuerpo')

@section('hijos')



<a href="nacionalidad/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de Nacionalidades</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nacionalidad</th>               
            </tr>

        <tbody>
        
        @foreach ($nacionalidad as $nacionalidades)
            <tr>
                <th>{{$nacionalidades->id}}</th>
                <th>{{$nacionalidades->nacionalidad}}</th>
            
            <th>
            <form action="/nacionalidad/{{{$nacionalidades->id}}}" method="post">

                 <a href="/nacionalidad/{{$nacionalidades->id}}/edit"class="btn btn-primary">Editar</a>
                 <a href="/nacionalidad/{{$nacionalidades->id}}" class="btn btn-danger">Eliminar</a>
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection