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
        Schema::create('riscos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50)->unique();
            $table->unsignedBigInteger('tipoRisco_id');
            $table->foreign('tipoRisco_id')->references('id')->on('tipoRiscos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riscos');
    }
};