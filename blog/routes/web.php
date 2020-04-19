<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



<<<<<<< HEAD
Route::get('login', function (){
    return view('login');
})->name('login');

Route::get('menuPrincipal', function () {
    return view('menu');
})->name('menuPrincipal')->middleware('autenticacion');

Route::post('login', 'login@loginCliente')->name('loginCliente');
=======
Route::get('menu','menu@mostrarMenu');
>>>>>>> parent of ad7f607... alta de licente completa

Route::get('nuevocliente', function () {
    return view('ClienteAlta');
});

Route::post('nuevocliente', 'clienteAlta@altaDecliente')->name('altaDeCliente'); 

Route::get('pedido', '');