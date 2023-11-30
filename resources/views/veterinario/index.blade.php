@extends('layouts.cuerpo')

@section('hijos')
    <a href="veterinario/create" class="btn btn-success">Crear</a>
    <h1>Lista de veterinarios</h1>

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
                    <td>{{$vete->id_genero}}</td>                    <td>
                        <form action="/veterinario/{{{$vete->id}}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/veterinario/{{$vete->id}}/edit" class="btn btn-primary">Editar</a>
                            <a href="/veterinario/{{$vete->id}}" class="btn btn-danger">Eliminar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
