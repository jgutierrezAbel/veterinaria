@extends('layouts.cuerpo')

@section('hijos')



<a href="proveedores/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de especialidades</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Tipo especialidad</th>
                <th>Descripcion</th>
            </tr>

        <tbody>
        
        @foreach ($espe as $espes)
            <tr>
                <th>{{$espes->id}}</th>
                <th>{{$espes->tipo_especialidad}}</th>
                <th>{{$espes->descripcion}}</th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection