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
        Schema::create('catalogo_maestro_pueblo_indigenas', function (Blueprint $table) {
            $table->id();
            $table->string('categoria', 50);
            $table->unsignedInteger('codigo_categoria');
            $table->unsignedInteger('codigo');
            $table->string('pueblo', 150)->nullable();
            $table->text('pertenencia_descripcion')->nullable();
            $table->text('otras_denominaciones')->nullable();
            $table->string('ambito', 50)->nullable();
            $table->text('presencia_departamentos')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique(['codigo_categoria', 'codigo']);
            $table->index('codigo_categoria');
            $table->index('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_maestro_pueblo_indigenas');
    }
};
