@extends('adminlte::page')

@section('title', 'Veterinaria')

@section('content_header')
<h1><i class="fas fa-paw"></i> JJR</h1>
@stop

@section('content')
@yield('hijos')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop