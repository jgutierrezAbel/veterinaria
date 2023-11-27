@extends('layouts.cuerpo')

@section('hijos')



<a href="tipomascota/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de tipos de especie</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Tipo especie</th>
                <th>descripcion</th>
            </tr>

        <tbody>
        
        @foreach ($tipo as $tipe)
            <tr>
                <th>{{$tipe->id}}</th>
                <th>{{$tipe->tipo_mascota}}</th>
                <th>{{$tipe->descripcion}}</th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection