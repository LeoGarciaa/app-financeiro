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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCtrlFinCategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CtrlFinCategoria $ctrlFinCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CtrlFinCategoria $ctrlFinCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtrlFinCategoriaRequest $request, CtrlFinCategoria $ctrlFinCategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CtrlFinCategoria $ctrlFinCategoria)
    {
        //
    }
}
