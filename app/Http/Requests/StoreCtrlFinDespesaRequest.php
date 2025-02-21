<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCtrlFinDespesaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'valor' => 'required',
            'ctrl_fin_categorias_id' => 'required',
            'nome' => 'required|min:3|max:255',
            'data_pagamento' => 'required',
            'mes' => 'required',
            'ano' => 'required',
            'recorencia' => 'required',
            'parcelas' => 'required'
        ];
    }
}
