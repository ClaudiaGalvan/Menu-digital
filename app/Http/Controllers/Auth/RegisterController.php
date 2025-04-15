<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Muestra el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Procesa el registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Detectar el rol automáticamente según el correo
        $role = 'cliente'; // Por defecto

        if (str_contains($request->email, 'coci')) {
            $role = 'cocinero';
        } elseif (str_contains($request->email, 'ik')) {
            $role = 'dueno';
        }

        // Crear usuario con su respectivo rol
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role,
        ]);

        return redirect()->route('login')->with('success', '¡Registro exitoso!');
    }
}
