<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlFinCategoriaController;
use App\Http\Controllers\CtrlFinReceitaController;
use App\Http\Controllers\CtrlFinDespesaController;

Route::get('/', function () {
    return response()->json(['sucess'=>true]);
});

Route::ApiResource('/ctrlfin/categoria',controller: CtrlFinCategoriaController::class);
Route::ApiResource('/ctrlfin/receita',controller: CtrlFinReceitaController::class);
Route::ApiResource('/ctrlfin/despesa',controller: CtrlFinDespesaController::class);