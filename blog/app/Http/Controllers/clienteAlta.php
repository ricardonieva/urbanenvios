<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class clienteAlta extends Controller
{
    public function altaDecliente(Request $request)
    {
        $cliente = new App\cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->mail = $request->mail;
        $cliente->contrasenia = "1234";

        $cliente->save();
        var_dump($cliente); 
    }
}
