@extends('layouts.cuerpo')

@section('hijos')



<a href="especialidades/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1 class="text-center mt-3">Lista de especialidades</h1>

    <table  class="table table-striped table-hover">
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

                <th>

                
                 <form action="/especialidades/{{{$espes->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/especialidades/{{$espes->id}}/edit"class="btn btn-primary">Editar</a>

                 <a href="/especialidades/{{$espes->id}}"class="btn btn-danger">Eliminar</a>

                </form>
                </th>
                
                
            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>

    <div class="text-center" style="margin-top: 20px;">
        <a href="/veterinario" class="btn btn-danger btn-lg">Volver</a>
    </div>

@endsection