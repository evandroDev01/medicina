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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->date('data_atendimento');
            $table->boolean('trabalhoAltura');
            $table->boolean('espacoConfinado');
            $table->boolean('apto');
            $table->unsignedBigInteger('coordenador_id');
            $table->foreign('coordenador_id')->references('id')->on('coordenadors');
            $table->unsignedBigInteger('empregado_id');
            $table->foreign('empregado_id')->references('id')->on('empregados');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setors');
            $table->unsignedBigInteger('funcao_id');
            $table->foreign('funcao_id')->references('id')->on('funcaos');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->unsignedBigInteger('tipoAtendimento_id');
            $table->foreign('tipoAtendimento_id')->references('id')->on('tipoAtendimentos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
