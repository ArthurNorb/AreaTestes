<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('categorias', function (Blueprint $table) {
        $table->id();
        $table->string('icone');       // Armazena o ícone
        $table->string('cor');         // Armazena a cor
        $table->string('nome');        // Armazena o nome
        $table->text('descricao')->nullable(); // Armazena a descrição (opcional)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
