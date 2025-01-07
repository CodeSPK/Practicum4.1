<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos ingresados
        $request->validate([
            'role' => 'required|in:Gerencia,Secretaria,Paciente',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Obtener las credenciales del formulario
        $credentials = $request->only('email', 'password');

        // Validar el usuario con el rol
        if (Auth::attempt($credentials)) {
            // Obtener el usuario autenticado
            $user = Auth::user();

            if ($user->role !== $request->role) {
                // Si el rol no coincide, cerrar la sesión
                Auth::logout();
                return back()->withErrors(['role' => 'El rol seleccionado no coincide con el usuario.']);
            }

            // Redireccionar según el rol
            if ($request->role == 'Gerencia') {
                return redirect()->route('gerencia.dashboard');
            } elseif ($request->role == 'Secretaria') {
                return redirect()->route('secretaria.dashboard');
            } else {
                return redirect()->route('paciente.dashboard');
            }
        }

        // Si la autenticación falla
        return back()->withErrors(['email' => 'Credenciales inválidas.']);
    }
}
