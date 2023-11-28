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
                
            </tr>

        <tbody>
        
        @foreach ($depa as $depas)
            <tr>
                <th>{{$depas->id}}</th>
                <th>{{$depas->nombre}}</th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection