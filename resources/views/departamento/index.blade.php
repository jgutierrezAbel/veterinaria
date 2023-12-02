@extends('layouts.cuerpo')

@section('hijos')
    <div>
        <a href="departamento/create" class="btn btn-success">Crear</a>
        <h1>Lista de departamentos</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($depa as $depas)
                    <tr>
                        <td>{{ $depas->id }}</td>
                        <td>{{ $depas->nombre }}</td>
                        <td>
                            <form action="/departamento/{{ $depas->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/departamento/{{ $depas->id }}/edit" class="btn btn-primary">Editar</a>
                                <a href="/departamento/{{ $depas->id }}/" class="btn btn-danger">Eliminar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection