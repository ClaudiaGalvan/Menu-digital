<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesa el login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // ✅ Usuario autenticado
            $user = Auth::user();

            // 🔥 Redirecciona dependiendo del rol
            if ($user->role === 'cliente') {
                return redirect()->route('menu');
            } elseif ($user->role === 'cocinero') {
                return redirect()->route('cocinero');
            } elseif ($user->role === 'dueno') {
                return redirect()->route('menu'); // Dueño también va a /menu, pero con permisos para editar
            } else {
                // Si no tiene rol válido, lo sacamos
                Auth::logout();
                return redirect()->route('login')->with('error', 'Rol no válido.');
            }
        }

        // ❌ Si el login falla
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    // Cierra la sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
