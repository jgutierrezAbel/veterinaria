@extends('layouts.cuerpo')

@section('hijos')



<a href="tipomascota/create"class="btn btn-success">Crear</a>
<table class="table table-striped table-hover">
<h1>Lista de tipos de Mascotas</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Tip mascotas</th>
                <th>descripcion</th>
            </tr>

        <tbody>
        
        @foreach ($tipo as $tipe)
            <tr>
                <th>{{$tipe->id}}</th>
                <th>{{$tipe->tipo_mascota}}</th>
                <th>{{$tipe->descripcion}}</th>
                

                <th>

                
                 <form action="/tipomascota/{{{$tipe->id}}}" method="post">
                    @csrf
                    @method('DELETE')

                 <a href="/tipomascota/{{$tipe->id}}/edit"class="btn btn-primary">Editar</a>

                 <button type="submit" class = "btn btn-primary">Eliminar </button>

                </form>
                </th>
                


            </tr>

        @endforeach
        
        </tbody>




        </thead>





    </table>


















@endsection