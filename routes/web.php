<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/crear', [ProductoController::class, 'create']);
Route::post('/productos', [ProductoController::class, 'store']);
