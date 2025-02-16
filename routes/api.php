<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlFinCategoriaController;
use App\Http\Controllers\CtrlFinReceitaController;

Route::get('/', function () {
    return response()->json(['sucess'=>true]);
});

Route::ApiResource('ctrlfincategoria',CtrlFinCategoriaController::class);
Route::ApiResource('ctrlfinreceita',CtrlFinReceitaController::class);