<?php

// use App\Http\Controllers\Api\RolController;
// use App\Http\Controllers\Api\UsuarioController;
// use App\Http\Controllers\Api\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
