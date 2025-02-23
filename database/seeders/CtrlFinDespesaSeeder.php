<?php

namespace Database\Seeders;

use App\Models\CtrlFinDespesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CtrlFinDespesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CtrlFinDespesa::factory()->create([
            "valor"=>"101.2",
            "ctrl_fin_categorias_id"=>"1",
            "nome"=>"Energia",
            "data_pagamento"=>"2025-02-22",
            "mes"=> "2",
            "ano"=>"2025",
            "recorencia"=>"M",
            "parcelas"=>"0"
        ]);

        CtrlFinDespesa::factory()->create([
            "valor"=>"13.00",
            "ctrl_fin_categorias_id"=>"2",
            "nome"=>"Netflix",
            "data_pagamento"=>"2025-02-22",
            "mes"=> "2",
            "ano"=>"2025",
            "recorencia"=>"M",
            "parcelas"=>"0"
        ]);

        CtrlFinDespesa::factory()->create([
            "valor"=>"13.00",
            "ctrl_fin_categorias_id"=>"6",
            "nome"=>"Roupas",
            "data_pagamento"=>"2025-02-22",
            "mes"=> "2",
            "ano"=>"2025",
            "recorencia"=>"M",
            "parcelas"=>"3"
        ]);
    }
}
