<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreCtrlFinDespesaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
            'ctrl_fin_categorias_id' => 'required|exists:ctrl_fin_categorias,id',
            'nome' => 'required|min:3|max:255',
            'data_pagamento' => ['nullable',Rule::date()->format("Y-m-d")],
            'mes' => ['required',Rule::in(["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"])],
            'ano' => 'required|min:4|max:4',
            'recorencia' => ['nullable',Rule::in(["D","M","T","S","A"])],
            'parcelas' => 'nullable|integer'
        ];
    }
}

//
//exists:ctrl_fin_categorias,id
//

//
//