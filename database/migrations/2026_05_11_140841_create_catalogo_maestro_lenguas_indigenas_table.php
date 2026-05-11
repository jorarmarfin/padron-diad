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
        Schema::create('catalogo_maestro_lenguas_indigenas', function (Blueprint $table) {
            $table->id();
            $table->string('categoria', 50);
            $table->unsignedInteger('codigo_categoria');
            $table->unsignedInteger('codigo');
            $table->string('lengua', 150)->nullable();
            $table->string('familia_linguistica', 100)->nullable();
            $table->string('ambito', 50)->nullable();
            $table->text('pueblos_que_la_hablan')->nullable();
            $table->string('resolucion_alfabeto', 50)->nullable();
            $table->text('condicion_descripcion')->nullable();
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
        Schema::dropIfExists('catalogo_maestro_lenguas_indigenas');
    }
};
