<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registro');
    }

    public function register(Request $request)
    {
        // Validación básica, puedes mejorar esto según tus necesidades
        $request->validate([
            'usuario' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario
        User::create([
            'name' => $request->input('usuario'),
            'email' => $request->input('correo'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Puedes agregar un mensaje de éxito aquí
        return redirect('/registro')->with('success', 'Usuario registrado exitosamente.');
    }
}
