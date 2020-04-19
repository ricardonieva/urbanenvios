<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class clienteAlta extends Controller
{
    public function altaDecliente(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'mail' => 'required|unique:clientes,mail',
            'contrasenia' => 'required'
        ]);

        $cliente = new App\cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->mail = $request->mail;
        $cliente->contrasenia = password_hash($request->contrasenia, PASSWORD_DEFAULT);        
        $cliente->save();   
        return back()->with('mensaje', 'Usario Registrado');  
    }
}
