<?php

namespace App\Http\Controllers;

use App\Models\User;  //Llamar a los usuarios
use Illuminate\Http\Request; //Recuerda q es para atrapar la informacion
use Illuminate\Support\Facades\Hash; // Recuerda que es para asegururar la contra

class RegistroController extends Controller
{
    public function registro(Request $request) 
    {

        $mensajes = [
        'name.required'       => '¡Oye! Necesitamos saber tu nombre.',
        'email.required'      => 'Sin correo no hay cuenta, pon uno válido.',
        'email.unique'        => 'Este correo ya lo usa alguien más, intenta con otro.',
        'contrasena.required' => 'La seguridad es primero, pon una contraseña.',
        'contrasena.min'      => 'Esa clave está muy corta, pon al menos 8 letras.',
        ];
       
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|unique:users', 
            'contrasena' => 'required|min:8',
            'tel' => 'nullable',
        ], $mensajes);

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->contrasena), 
            'tel' => $request->numero
        ]);

       
        return redirect('/')->with('success', '¡Usuario registrado!');
    }
}
