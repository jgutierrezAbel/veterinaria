@extends('layouts.cuerpo')

@section('hijos')

<h1 class="text-center mt-3">Bienvenido a Veterinaria JJR</h1>

<div class="text-center mt-4">
    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="/cita" class="btn btn-danger btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-calendar-alt fa-2x mb-2"></i>
                <span>Citas</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/cliente" class="btn btn-warning btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-users fa-2x mb-2"></i>
                <span>Clientes</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/veterinario" class="btn btn-success btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-user-md fa-2x mb-2"></i>
                <span>Veterinarios</span>
            </a>
        </div>
    </div>

    <p>

    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="/mascota" class="btn btn-success btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-paw fa-2x mb-2"></i>
                <span>Mascotas</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/empleado" class="btn btn-primary btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-user-tie fa-2x mb-2"></i>
                <span>Empleados</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/proveedores" class="btn btn-danger btn-lg btn-square d-flex flex-column align-items-center">
                <i class="fas fa-truck fa-2x mb-2"></i>
                <span>Proveedores</span>
            </a>
        </div>
    </div>
</div>

@endsection
