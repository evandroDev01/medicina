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
        Schema::create('coordenadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->string('crm',10);
            $table->date('data_inicio');
            $table->date('data_fim')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordenadors');
    }
};
