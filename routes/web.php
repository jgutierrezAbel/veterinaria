<?php

use Illuminate\Support\Facades\Route;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::resource('/departamento','App\Http\Controllers\departamentoController');
route::resource('/generoh','App\Http\Controllers\generoController');
route::resource('/especialidades','App\Http\Controllers\especialidadesController');
route::resource('/generom','App\Http\Controllers\generomascotaController');
route::resource('/proveedores','App\Http\Controllers\proveedoreController');
route::resource('/nacionalidad','App\Http\Controllers\nacionalidadController');
route::resource('/tipomascota','App\Http\Controllers\tipomascotaController');
route::resource('/portada','App\Http\Controllers\portadaController');





Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
