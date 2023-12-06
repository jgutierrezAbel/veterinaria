<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validación de datos para el registro
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // Puedes agregar más reglas de validación si es necesario
        ]);

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirigir a una página de éxito o a donde necesites después del registro
        return redirect('/register')->with('success', 'Se ha registrado correctamente');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validación de datos para el inicio de sesión
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir a /portada
            return redirect('/portada');
        } else {
            // Autenticación fallida, redirigir de vuelta con un mensaje de error
            return redirect('/login')->with('error', 'Credenciales incorrectas');
        }
    }
}



