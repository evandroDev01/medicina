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
        Schema::create('atendimentoExames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atendimento_id');
            $table->foreign('atendimento_id')->references('id')->on('atendimentos');
            $table->unsignedBigInteger('exame_id');
            $table->foreign('exame_id')->references('id')->on('exames');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentoExames');
    }
};
