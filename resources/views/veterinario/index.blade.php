@extends('layouts.cuerpo')

@section('hijos')
   
<div style="display: flex; justify-content: space-between;">
<a href="veterinario/create" class="btn btn-success">Crear</a>

        <a href="/especialidades" class="btn btn-info">Especialidades veterinarias</a>
    </div>

    
    <h1 class="text-center mt-3">Lista de veterinarios</h1>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Especialidad</th>
                <th>Nacionalidad</th>
                <th>Género</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vet as $vete)
                <tr>
                    <td>{{$vete->id}}</td>
                    <td>{{$vete->nombre}}</td>
                    <td>{{$vete->apellido}}</td>
                    <td>{{$vete->fecha_nac}}</td>
                    <td>{{$vete->id_especialidad}}</td>
                    <td>{{$vete->id_nacionalidad}}</td>
                    <td>{{$vete->id_genero}}</td>                   
                     <td>
                        <form action="/veterinario/{{{$vete->id}}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/veterinario/{{$vete->id}}/edit" class="btn btn-primary">Editar</a>
                            <button type="submit" class = "btn btn-primary">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center" style="margin-top: 20px;">
        <a href="/portada" class="btn btn-danger btn-lg">Volver</a>
    </div>

@endsection
