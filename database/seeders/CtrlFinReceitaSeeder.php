<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CtrlFinReceita;

class CtrlFinReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CtrlFinReceita::factory()->create([
            'nome'=>'Salário',
            'valor'=> '3000.00',
            'mes'=>'01',
            'ano'=>'2025',
            'recorencia'=> 'M',
        ]);

        CtrlFinReceita::factory()->create([
            'nome'=>'Salário',
            'valor'=> '3000.00',
            'mes'=>'02',
            'ano'=>'2025',
            'recorencia'=> 'M',
        ]);
    }
}
