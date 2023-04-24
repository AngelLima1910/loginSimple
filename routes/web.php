<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clientes;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
Route::get('/inicio', [Clientes::class, 'index'])->name('inicio');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');