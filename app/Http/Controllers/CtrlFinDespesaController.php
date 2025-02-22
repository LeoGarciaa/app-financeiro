<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCtrlFinDespesaRequest;
use App\Http\Requests\UpdateCtrlFinDespesaRequest;
use App\Models\CtrlFinDespesa;

class CtrlFinDespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CtrlFinDespesa::all()->toJson();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCtrlFinDespesaRequest $request)
    {
        //
        CtrlFinDespesa::create($request->validated());

        return response()->json(["Criado com sucesso"]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CtrlFinDespesa::findOrFail($id)->toJson();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtrlFinDespesaRequest $request, string $id)
    {
        //
        CtrlFinReceitaController::findOrFail($id)->update($request->validated());
        
        return response()->json(["Alterado com sucesso!"]) ;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
           //
           CtrlFinReceitaController::findOrFail($id)->delete();

           return response()->json(["Deletado com sucesso!"]) ;
    }
}
