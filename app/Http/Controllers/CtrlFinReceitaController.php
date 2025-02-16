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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCtrlFinReceitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CtrlFinReceita $ctrlFinReceita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CtrlFinReceita $ctrlFinReceita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtrlFinReceitaRequest $request, CtrlFinReceita $ctrlFinReceita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CtrlFinReceita $crtFinReceita)
    {
        //
    }
}
