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
        Schema::create('maestro_ubigeo', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 6);
            $table->string('departamento', 100);
            $table->string('provincia', 100);
            $table->string('distrito', 120);
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique('codigo');
            $table->index('departamento');
            $table->index('provincia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestro_ubigeo');
    }
};
