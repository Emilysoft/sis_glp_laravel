<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CilindroController;
use App\Models\Cilindro;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cilindros', [CilindroController::class, 'index']);
Route::get('/cilindros/create', [CilindroController::class, 'create']);
Route::post('/cilindros', [CilindroController::class, 'store']); // <--- Esto creo que es para ingresar
Route::get('/cilindros/{id}', [CilindroController::class, 'show']); // <--- Esto creo que es para mostrar




