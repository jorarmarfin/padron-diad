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
        Schema::create('catalogo_maestro_general', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('catalogo_codigo');
            $table->string('catalogo', 100);
            $table->unsignedInteger('codigo');
            $table->string('descripcion', 255);
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique(['catalogo_codigo', 'codigo']);
            $table->index('catalogo_codigo');
            $table->index('catalogo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_maestro_general');
    }
};
