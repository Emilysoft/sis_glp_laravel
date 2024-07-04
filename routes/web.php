<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CilindroController;
use App\Models\Cilindro;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cilindros', [CilindroController::class, 'index']);
Route::get('/cilindros/create', [CilindroController::class, 'create']);





