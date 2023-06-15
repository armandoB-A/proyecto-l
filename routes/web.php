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
})->name('inicio');

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
//------------PANEL USUARIO--------------
Route::get('/panel-user', [App\Http\Controllers\MudanzaController::class, 'getListbyUser'])->name('panel-user');

Route::get('/descripcion-mudanza/{id}', [App\Http\Controllers\MudanzaController::class, 'getListbyId'])->name('descripcion-mudanza');

Route::get('/solicitar-mudanza', [App\Http\Controllers\MudanzaController::class, 'getSoliMz'])
    ->name('solicitar-mudanza');

Route::post('/cotizacion-mudanza', [App\Http\Controllers\MudanzaController::class, 'getMessageCot'])
    ->name('cotizacion-mudanza');

Route::get('/exito-mudanza/id_mun/{id_mun}/id_ori/{id_ori}/id_dest/{id_dest}',
    [App\Http\Controllers\MudanzaController::class, 'saveMudanza'])
    ->name('exito-mudanza');

//------------PANEL ADMIN--------------
Route::get('/panel-admin', [App\Http\Controllers\MudanzaController::class, 'getListbyUserNormal'])->name('panel-admin');

Route::get('/admin-listuser/{id}', [App\Http\Controllers\MudanzaController::class, 'getListbyUserId'])
    ->name('admin-listuser');

Route::get('/adm-descripcion-mudanza/{id}', [App\Http\Controllers\MudanzaController::class, 'getListbyIdAdm'])
    ->name('adm-descripcion-mudanza');

Route::post('/handle-form/{id}', [\App\Http\Controllers\MudanzaController::class, 'handleForm'])->name('handleForm');

//descripcion-mudanza
