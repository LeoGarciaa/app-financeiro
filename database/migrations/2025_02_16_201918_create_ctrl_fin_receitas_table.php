<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ctrl_fin_receitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->decimal('valor',10,2);
            $table->string('mes', 2);
            $table->string('ano', 4);
            $table->string('recorencia',1 );
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctrl_fin_receitas');
    }
};
