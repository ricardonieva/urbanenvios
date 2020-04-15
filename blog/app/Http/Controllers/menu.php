<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Symfony\Component\VarDumper\VarDumper;

class menu extends Controller
{
    public function mostrarMenu()
    {
        // $cliente = new cliente();
        // $datos = $cliente->selectAllCliente(); 

        $datos = App\cliente::all();
        return view('menu', ["clientes" => $datos]);
    }
}
