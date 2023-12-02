@extends('layouts.cuerpo')

@section('hijos')



<a href="tratamiento/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de tratamientos</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripción</th>
                <th>Id_Cita</th>
                
            </tr>

        <tbody>
        
        @foreach ($tratamiento as $tratamientos)
            <tr>
                <th>{{$tratamientos->id}}</th>
                <th>{{$tratamientos->nombretratamiento}}</th>
                <th>{{$tratamientos->descripcion}}</th>
                <th>{{$tratamientos->id_cita}}</th>
            
            <th>
            <form action="/tratamiento/{{{$tratamientos->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/tratamiento/{{$tratamientos->id}}/edit"class="btn btn-primary">Editar</a>
                 <a href="/tratamiento/{{$tratamientos->id}}" class="btn btn-danger">Eliminar</a>
                 </form> 
                </th>
                </tr>
                
        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection