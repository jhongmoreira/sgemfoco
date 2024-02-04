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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("cod_empresa");
            $table->string("nome_vaga");
            $table->float("salario");
            $table->string("escolaridade");
            $table->string("descricao");
            $table->boolean("aberto");

            $table->foreign("cod_empresa")->references("id")->on("empresas");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
