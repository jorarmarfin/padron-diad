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
        Schema::create('maestro_procesos_admision', function (Blueprint $table) {
            $table->id();
            $table->string('sede_filial', 10);
            $table->string('tipo_proceso', 100);
            $table->string('nivel_academico', 100);
            $table->string('anio', 20);
            $table->unsignedInteger('numero_convocatoria');
            $table->unsignedInteger('codigo_entidad_unidad');
            $table->unsignedInteger('codigo_entidad_programa')->nullable();
            $table->string('unidad', 255)->nullable();
            $table->string('programa', 255)->nullable();
            $table->unsignedInteger('vacante_convocatoria');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->date('fecha_inicio_carga');
            $table->date('fecha_fin_carga');
            $table->timestamps();

            $table->index('sede_filial');
            $table->index('tipo_proceso');
            $table->index('nivel_academico');
            $table->index('anio');
            $table->index('codigo_entidad_unidad');
            $table->index('codigo_entidad_programa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestro_procesos_admision');
    }
};
