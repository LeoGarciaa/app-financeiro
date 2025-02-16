<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CtrlFinDespesa>
 */
class CtrlFinDespesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crtl_fin_categorias_id',
            'valor' => fake()->randomFloat(2,2500,1000000),
            'nome' => fake()->name,
            'data_pagamento' => fake()->date('Y-m-d'),
            'mes'  => fake()->name,
            'ano' => fake()->name,
            'recorencia' => fake()->name,
            'parcelas' => fake()->numberBetween(2,100), 
        ];
    }
}
