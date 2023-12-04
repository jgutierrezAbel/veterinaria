<?php

use Illuminate\Support\Facades\Route;


/*
use app\Http\Controllers\loginControler;
*/




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

/*
route::view('/login',"login")->name('login');
route::view('/registro',"register")->name('registro');
route::view('/privada',"secret")->middleware('auth')->name('privada');



route::post('/validar-registro',[loginControler::class,'register'])->name('validar-registro');
route::post('/inicia-sesion',[loginControler::class,'login'])->name('inicia-sesion');
route::get('/logour',[loginControler::class,'logout'])->name('logout');
*/

route::resource('/departamento','App\Http\Controllers\departamentoController');
route::resource('/generoh','App\Http\Controllers\generoController');
route::resource('/especialidades','App\Http\Controllers\especialidadesController');
route::resource('/generom','App\Http\Controllers\generomascotaController');
route::resource('/proveedores','App\Http\Controllers\proveedoreController');
route::resource('/nacionalidad','App\Http\Controllers\nacionalidadController');
route::resource('/tipomascota','App\Http\Controllers\tipomascotaController');
route::resource('/portada','App\Http\Controllers\portadaController');
route::resource('/empleado','App\Http\Controllers\empleadoController');
route::resource('/mascota','App\Http\Controllers\mascotaController');
route::resource('/cliente','App\Http\Controllers\clienteController');
route::resource('/tratamiento','App\Http\Controllers\tratamientoController');
route::resource('/cita','App\Http\Controllers\citaController');
route::resource('/veterinario','App\Http\Controllers\veterinarioController');
route::resource('/medicamento','App\Http\Controllers\medicamentoController');

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
