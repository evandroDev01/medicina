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
        Schema::create('atendimentoRiscos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoAtendimento_id');
            $table->foreign('tipoAtendimento_id')->references('id')->on('tipoAtendimentos');
            $table->unsignedBigInteger('risco_id');
            $table->foreign('risco_id')->references('id')->on('riscos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentoRiscos');
    }
};
