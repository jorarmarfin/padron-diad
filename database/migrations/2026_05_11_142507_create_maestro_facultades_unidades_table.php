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
        Schema::create('maestro_facultades_unidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('codigo');
            $table->string('tipo', 50);
            $table->string('nombre', 255);
            $table->string('vigencia', 50);
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique('codigo');
            $table->index('tipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestro_facultades_unidades');
    }
};
