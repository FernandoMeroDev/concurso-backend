<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [ClientController::class, 'index']);

Route::post('/clients/store', [ClientController::class, 'create']);

Route::put('/clients/update/{client}', [ClientController::class, 'update']);