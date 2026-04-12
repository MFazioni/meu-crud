<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/teste', function(){
    return response()->json(['mensagem' => 'Laravel funcionando!']);
});

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::apiResource('/produtos', ProdutoController::class);