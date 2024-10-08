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
        Schema::create('grupoExames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->unsignedBigInteger('exame_id');
            $table->foreign('exame_id')->references('id')->on('exames');
            $table->unsignedBigInteger('tipoAtendimento_id');
            $table->foreign('tipoAtendimento_id')->references('id')->on('tipoAtendimentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupoExames');
    }
};
