@extends('layouts.cuerpo')

@section('hijos')

<h1>Bienvenido a Veterinaria Unicah</h1>


<h2>-----------------------------</h2>

<h2>Este es nuestro menu</h2>
@csrf
@method('DELETE')

<a href="/proveedores"class="btn btn-success"> Proveedores </a>
<a href="/tipomascota"class="btn btn-warning">Tipos de mascotas </a>
<a href="/departamento"class="btn btn-warning">Departamentos </a>
<a href="/especialidades"class="btn btn-warning">Especialidades de los veterinarios </a>
<a href="/empleado"class="btn btn-warning">Ver empleado</a>
<<<<<<< HEAD
<a href="/cliente"class="btn btn-warning">Ver cliente</a>
<a href="/mascota"class="btn btn-warning">Ver Mascotas</a>

=======
<a href="/mascota"class="btn btn-warning">Ver Mascotas</a>
<a href="/nacionalidad"class="btn btn-warning">Nacionalidad</a>
>>>>>>> 8eebf898854990bbd7b897694b6790e769fbc8b8
@endsection





































