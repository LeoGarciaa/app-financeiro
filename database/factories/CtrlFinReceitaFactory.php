<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CtrlFinReceita>
 */
class CtrlFinReceitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> fake()->name(),
            'valor'=> fake()->randomFloat(2),
            'mes'=> fake()->name(),
            'ano'=> fake()->name(),
            'recorencia'=> fake()->name()
        ];
    }
}
