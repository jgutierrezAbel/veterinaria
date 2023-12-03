@extends('layouts.cuerpo')

@section('hijos')
    
<div style="display: flex; justify-content: space-between;">
        <a href="mascota/create" class="btn btn-success">Crear</a>
        <a href="/tipomascota" class="btn btn-info">Especies</a>
    </div>

    <h1 class="text-center mt-3">Lista de Mascotas</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>ID de la especialidad veterinaria</th>
                <th>Fecha de nacimiento</th>
                <th>ID Cliente</th>
                <th>Especie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascota as $mascotas)
                <tr>
                    <td>{{$mascotas->id}}</td>
                    <td>{{$mascotas->nombre_mascota}}</td>
                    <td>{{$mascotas->id_especialidad}}</td>
                    <td>{{$mascotas->fecha_nac}}</td>
                    <td>{{$mascotas->id_cli}}</td>
                    <td>{{$mascotas->tipo_mascotas_nombre}}</td>
                    <td>
                        <form action="/mascota/{{{$mascotas->id}}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/mascota/{{$mascotas->id}}/edit" class="btn btn-primary">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
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
