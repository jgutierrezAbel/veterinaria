@extends('layouts.cuerpo')

@section('hijos')



<a href="departamento/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de departamento</h1>

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
            <th>

                
                 <form action="/departamento/{{{$depas->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/departamento/{{$depas->id}}/edit"class="btn btn-primary">Editar</a>

                 <button type="submit" class = "btn btn-primary">Eliminar </button>

                </form>
                </th>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection