<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCtrlFinCategoriaRequest;
use App\Http\Requests\UpdateCtrlFinCategoriaRequest;
use App\Models\CtrlFinCategoria;

class CtrlFinCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CtrlFinCategoria::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCtrlFinCategoriaRequest $request)
    {
        CtrlFinCategoria::create($request->validated());

        return response()->json(["Criado com sucesso"]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CtrlFinCategoria::findOrFail($id)->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtrlFinCategoriaRequest $request, string $id)
    {
        //
        CtrlFinCategoria::findOrFail($id)->update($request->validated());
        
        return response()->json(["Alterado com sucesso!"]) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        CtrlFinCategoria::findOrFail($id)->delete();

        return response()->json(["Deletado com sucesso!"]) ;
    }
}
