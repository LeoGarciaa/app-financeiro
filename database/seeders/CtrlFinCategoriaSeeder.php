<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CtrlFinCategoria;

class CtrlFinCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CtrlFinCategoria::factory()->create([
            'nome'=>'Fixo',
            'meta'=> '0.45'
        ]);

        CtrlFinCategoria::factory()->create([
            'nome'=>'Conforto',
            'meta'=> '0.1'
        ]);

        CtrlFinCategoria::factory()->create([
            'nome'=>'Metas',
            'meta'=> '0.1'
        ]);

        CtrlFinCategoria::factory()->create([
            'nome'=>'Conhecimento',
            'meta'=> '0.05'
        ]);

        CtrlFinCategoria::factory()->create([
            'nome'=>'Luxo',
            'meta'=> '0.1'
        ]);

        CtrlFinCategoria::factory()->create([
            'nome'=>'Liberdade Financeira',
            'meta'=> '0.2'
        ]);
    }
}
