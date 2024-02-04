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
        Schema::create('empresas', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string("nome_empresa");        
            $table->string("logotipo_empresa");        
            $table->string("telefone_empresa");        
            $table->string("whatsapp_empresa");        
            $table->string("site_empresa");        
            $table->string("instagram_empresa");        
            $table->string("facebook_empresa");        
            $table->string("email_empresa");        
            $table->string("rua_empresa");        
            $table->integer("numero_empresa");        
            $table->string("bairro_empresa");        
            $table->string("cidade_empresa");        
            $table->boolean("visivel");   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
