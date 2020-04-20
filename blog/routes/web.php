<?php

use Illuminate\Support\Facades\Route;


Route::get('login', function (){
    return view('login');
})->name('login');

Route::post('login', 'login@loginCliente')->name('loginCliente');

Route::get('menuPrincipal', function () {
    return view('menu');
})->name('menuPrincipal')->middleware('autenticacion');

Route::get('nuevocliente', function () {
    return view('ClienteAlta');
});

Route::post('nuevocliente', 'clienteAlta@altaDecliente')->name('altaDeCliente'); 

Route::get('pedidos', function(){
    return view('realizarPedido');
})->name('pedidos');