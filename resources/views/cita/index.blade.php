@extends('layouts.cuerpo')

@section('hijos')

<div style="display: flex; justify-content: space-between;">
<a href="cita/create"class="btn btn-success">Crear</a>
    <div>
        <a href="/cliente" class="btn btn-info">Clientes</a>
        <a href="/veterinario" class="btn btn-info">Veterinarios</a>
        <a href="/mascota" class="btn btn-info">Mascotas</a>
        <a href="/tratamiento"class="btn btn-info">Tratamientos</a>
    </div>
</div>



<table class="table table-striped table-hover">

<h1 class="text-center mt-3">Lista de citas</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de la cita</th>
                <th>Hora de la cita</th>
                <th>ID del cliente</th>
                <th>ID del Veterinario</th>
                <th>ID de la mascota</th>
                <th>Descripción</th>
            </tr>

        <tbody>
        
        @foreach ($cita as $citas)
            <tr>
                <th>{{$citas->id}}</th>
                <th>{{$citas->fechacita}}</th>
                <th>{{$citas->horacita}}</th>
                <th>{{$citas->id_cli}}</th>
                <th>{{$citas->id_vet}}</th>
                <th>{{$citas->id_mas}}</th>
                <th>{{$citas->descripcion}}</th>
            
            <th>
            <form action="/cita/{{{$citas->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/cita/{{$citas->id}}/edit"class="btn btn-primary">Editar</a>
                 <a href="/cita/{{$citas->id}}" class="btn btn-danger">Eliminar</a>
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