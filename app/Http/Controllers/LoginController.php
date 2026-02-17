<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        
      

        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', '¡Bienvenido de nuevo!');
        }

        
        return back()->withErrors([
            'email' => 'El correo o la contraseña no coinciden, ingrese los datos correctos.',
        ]);
    }
}
