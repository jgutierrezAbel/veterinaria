@extends('layouts.cuerpo')

@section('hijos')


<div style="display: flex; justify-content: space-between;">
        <a href="tratamiento/create" class="btn btn-success">Crear</a>
        <a href="/medicamento" class="btn btn-info">Medicamentos</a>
    </div>

<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de tratamientos</h1>


    <table class ="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>ID de la cita</th>
                <th>Medicamentos</th>
                
            </tr>

        <tbody>
        
        @foreach ($tratamiento as $tratamientos)
            <tr>
                <th>{{$tratamientos->id}}</th>
                <th>{{$tratamientos->nombretratamiento}}</th>
                <th>{{$tratamientos->descripcion}}</th>
                <th>{{$tratamientos->id_cita}}</th>
                <th>{{$tratamientos->medicamento}}</th>
            
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


    <div class="text-center" style="margin-top: 20px;">
        <a href="/cita" class="btn btn-danger btn-lg">Volver</a>
    </div>
















@endsection