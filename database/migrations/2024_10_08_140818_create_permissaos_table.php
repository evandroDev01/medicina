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
        Schema::create('permissaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoUsuario_id');
            $table->foreign('tipoUsuario_id')->references('id')->on('tipoUsuarios');
            $table->unsignedBigInteger('formulario_id');
            $table->foreign('formulario_id')->references('id')->on('formularios');
            $table->boolean('inclui');
            $table->boolean('altera');
            $table->boolean('excluir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissaos');
    }
};