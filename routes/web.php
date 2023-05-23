<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/contenido', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('content');
});

Route::get('/transporte', function () {
    return view('panelinicial.transporte');
})->name('transporte');

Route::get('/empaque', function () {
    return view('panelinicial.empaque');
})->name('empaque');

Route::get('/bodega', function () {
    return view('panelinicial.bodega');
})->name('bodega');

Route::get('/mudanzaslocales', function () {
    return view('panelinicial.mudanzas-locales');
})->name('mudanzaslocales');

Route::get('/mudanzasempresas', function () {
    return view('panelinicial.mudanzas-empresas');
})->name('mudanzasempresas');

Route::get('/mudanzashogares', function () {
    return view('panelinicial.mudanzas-hogares');
})->name('mudanzashogares');

Route::get('/mudanzasmercancia', function () {
    return view('panelinicial.mudanzas-mercancias');
})->name('mudanzasmercancia');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")
    ->group(function () {
        Route::resource("clientes", \App\Http\Controllers\ClientesController::class);
        Route::resource("usuarios", \App\Http\Controllers\UserController::class)->parameters(["usuarios" => "user"]);

        Route::get("/ventas/ticket", [\App\Http\Controllers\VentasController::class, 'ticket'])->name("ventas.ticket");
        Route::resource("ventas", \App\Http\Controllers\VentasController::class);
        Route::get("/vender", [\App\Http\Controllers\VenderController::class, 'index'])->name("vender.index");
        Route::post("/productoDeVenta", [\App\Http\Controllers\VenderController::class, 'agregarProductoVenta'])->name("agregarProductoVenta");
        Route::delete("/productoDeVenta", [\App\Http\Controllers\VenderController::class, 'quitarProductoDeVenta'])->name("quitarProductoDeVenta");
        Route::post("/terminarOCancelarVenta", [\App\Http\Controllers\VenderController::class, 'terminarOCancelarVenta'])->name("terminarOCancelarVenta");
    });

