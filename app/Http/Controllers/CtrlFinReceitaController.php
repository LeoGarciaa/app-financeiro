<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCtrlFinReceitaRequest;
use App\Http\Requests\UpdateCtrlFinReceitaRequest;
use App\Models\CtrlFinReceita;

class CtrlFinReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CtrlFinReceita::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCtrlFinReceitaRequest $request)
    {
        CtrlFinReceita::create($request->validated());

        return response()->json(["Criado com sucesso"]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CtrlFinReceita::findOrFail($id)->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtrlFinReceitaRequest $request, CtrlFinReceita $ctrlFinReceita)
    {
        //
        $ctrlFinReceita->update($request->validated());
        
        return response()->json(["Alterado com sucesso!"]) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CtrlFinReceita $ctrlFinReceita)
    {
        //
        //return $ctrlFinReceita->toJson();
        $ctrlFinReceita->delete();

        return response()->json(["Deletado com sucesso!"]) ;
    }
}
