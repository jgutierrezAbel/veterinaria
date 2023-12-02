@extends('layouts.cuerpo')

@section('hijos')



<a href="cita/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de citas</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha de la cita</th>
                <th>Hora de la cita</th>
                <th>Id del cliente</th>
                <th>Id del Veterinario</th>
                <th>Id de la mascota</th>
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


















@endsection