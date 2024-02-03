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
        Schema::create('classificados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("id_usuario")->constraint();
            $table->text("texto_classificado");
            $table->dateTime("data_publicacao");
            $table->dateTime("data_expira");
            $table->boolean("post_aprovado");

            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->foreignId('id_usuario')->constrained()->onDelete('cascade');
        Schema::dropIfExists('classificados');
    }
};
