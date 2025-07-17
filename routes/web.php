<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//clientes 
Route::get('/clients', [ClientController::class, 'index']);

Route::post('/clients/store', [ClientController::class, 'create']);

Route::put('/clients/update/{client}', [ClientController::class, 'update']);

// Plato routes 
Route::get('/platos', [PlatoController::class, 'index']);

//pedidos routes

Route::get('/pedido', [PedidoController::class, 'index']);

Route::post('/pedido/store', [PedidoController::class, 'create']);

Route::put('/pedido/update/{client}', [PedidoController::class, 'update']);

//insumos Routes
Route::get('/insumos', [InsumosController::class, 'index']);

Route::post('/insumos/store', [InsumosController::class, 'store']);

Route::put('/insumos/update/{insumo}', [PedidoController::class, 'update']);
 