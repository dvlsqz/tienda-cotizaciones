<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\ConexionController::class, 'getInicioSesion'])->name('inicio_sesion');


Route::group(['prefix' => '/admin', 'middleware' => []],function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'getInicio'])->name('panel_principal');

    Route::get('/clientes', [App\Http\Controllers\Admin\ClienteController::class, 'getInicio'])->name('clientes');
    Route::get('/cliente/registrar', [App\Http\Controllers\Admin\ClienteController::class, 'getClienteRegistrar'])->name('cliente_registrar_get');
    Route::post('/cliente/registrar', [App\Http\Controllers\Admin\ClienteController::class, 'postClienteRegistrar'])->name('cliente_registrar_post');

});

