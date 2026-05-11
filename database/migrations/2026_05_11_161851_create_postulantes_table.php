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
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_sede_filial', 50);
            $table->unsignedInteger('tipo_proceso_catalogo_codigo');
            $table->unsignedInteger('tipo_proceso');
            $table->string('proceso_admision', 6);
            $table->unsignedInteger('numero_convocatoria');
            $table->unsignedInteger('tipo_documento_catalogo_codigo');
            $table->unsignedInteger('tipo_documento');
            $table->string('nro_documento', 18);
            $table->string('nombres', 45);
            $table->string('primer_apellido', 40);
            $table->string('segundo_apellido', 40);
            $table->string('apellido_casada', 40)->nullable();
            $table->unsignedInteger('solo_un_apellido_catalogo_codigo');
            $table->unsignedInteger('solo_un_apellido');
            $table->unsignedInteger('sexo_catalogo_codigo');
            $table->unsignedInteger('sexo');
            $table->date('fecha_nacimiento');
            $table->unsignedInteger('pais_nacimiento');
            $table->unsignedInteger('nacionalidad');
            $table->string('ubigeo_nacimiento', 6)->nullable();
            $table->string('ubigeo_domicilio', 6)->nullable();
            $table->unsignedInteger('condicion_discapacidad_catalogo_codigo')->nullable();
            $table->unsignedInteger('condicion_discapacidad')->nullable();
            $table->unsignedInteger('tipo_discapacidad_catalogo_codigo')->nullable();
            $table->unsignedInteger('tipo_discapacidad')->nullable();
            $table->string('celular', 12);
            $table->string('correo_personal', 100);
            $table->unsignedInteger('codigo_facultad_unidad_opcion_1');
            $table->unsignedInteger('codigo_facultad_unidad_opcion_2')->nullable();
            $table->unsignedInteger('codigo_facultad_unidad_opcion_3')->nullable();
            $table->unsignedInteger('codigo_programa_opcion_1');
            $table->unsignedInteger('codigo_programa_opcion_2')->nullable();
            $table->unsignedInteger('codigo_programa_opcion_3')->nullable();
            $table->date('fecha_postulacion');
            $table->decimal('puntaje_obtenido', 8, 5);
            $table->unsignedInteger('modalidad_admision_catalogo_codigo');
            $table->unsignedInteger('modalidad_admision');
            $table->unsignedInteger('modalidad_estudio_catalogo_codigo');
            $table->unsignedInteger('modalidad_estudio');
            $table->string('es_ingresante', 1);
            $table->unsignedInteger('codigo_facultad_unidad_ingreso')->nullable();
            $table->unsignedInteger('codigo_programa_ingreso')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->string('correo_institucional', 100)->nullable();
            $table->string('codigo_orcid', 16)->nullable();
            $table->unsignedInteger('pertenencia_codigo_categoria')->nullable();
            $table->unsignedInteger('pertenencia_costumbres_antepasados')->nullable();
            $table->unsignedInteger('pueblo_indigena_codigo_categoria')->nullable();
            $table->unsignedInteger('pueblo_indigena_originario')->nullable();
            $table->unsignedInteger('habla_lengua_codigo_categoria')->nullable();
            $table->unsignedInteger('habla_lengua_indigena')->nullable();
            $table->unsignedInteger('lengua_indigena_codigo_categoria')->nullable();
            $table->unsignedInteger('lengua_indigena_originaria')->nullable();
            $table->string('nombres_materno', 45);
            $table->string('primer_apellido_materno', 40);
            $table->string('segundo_apellido_materno', 40);
            $table->string('apellido_casada_materno', 40)->nullable();
            $table->string('nombres_paterno', 45);
            $table->string('primer_apellido_paterno', 40);
            $table->string('segundo_apellido_paterno', 40);
            $table->foreignId('maestro_proceso_admision_id')->constrained('maestro_procesos_admision');
            $table->timestamps();

            $table->index('codigo_sede_filial');
            $table->index('tipo_proceso');
            $table->index('proceso_admision');
            $table->index('nro_documento');
            $table->index('fecha_postulacion');
            $table->index('es_ingresante');
            $table->index('codigo_facultad_unidad_opcion_1');
            $table->index('codigo_programa_opcion_1');

            $table->foreign('codigo_sede_filial')
                ->references('codigo')
                ->on('maestro_filiales');

            $table->foreign(['tipo_proceso_catalogo_codigo', 'tipo_proceso'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['tipo_documento_catalogo_codigo', 'tipo_documento'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['solo_un_apellido_catalogo_codigo', 'solo_un_apellido'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['sexo_catalogo_codigo', 'sexo'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['condicion_discapacidad_catalogo_codigo', 'condicion_discapacidad'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['tipo_discapacidad_catalogo_codigo', 'tipo_discapacidad'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['modalidad_admision_catalogo_codigo', 'modalidad_admision'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign(['modalidad_estudio_catalogo_codigo', 'modalidad_estudio'])
                ->references(['catalogo_codigo', 'codigo'])
                ->on('catalogo_maestro_general');

            $table->foreign('pais_nacimiento')
                ->references('codigo')
                ->on('maestro_pais');

            $table->foreign('nacionalidad')
                ->references('codigo')
                ->on('maestro_nacionalidad');

            $table->foreign('ubigeo_nacimiento')
                ->references('codigo')
                ->on('maestro_ubigeo');

            $table->foreign('ubigeo_domicilio')
                ->references('codigo')
                ->on('maestro_ubigeo');

            $table->foreign('codigo_facultad_unidad_opcion_1')
                ->references('codigo')
                ->on('maestro_facultades_unidades');

            $table->foreign('codigo_facultad_unidad_opcion_2')
                ->references('codigo')
                ->on('maestro_facultades_unidades');

            $table->foreign('codigo_facultad_unidad_opcion_3')
                ->references('codigo')
                ->on('maestro_facultades_unidades');

            $table->foreign('codigo_programa_opcion_1')
                ->references('codigo')
                ->on('maestro_programas');

            $table->foreign('codigo_programa_opcion_2')
                ->references('codigo')
                ->on('maestro_programas');

            $table->foreign('codigo_programa_opcion_3')
                ->references('codigo')
                ->on('maestro_programas');

            $table->foreign('codigo_facultad_unidad_ingreso')
                ->references('codigo')
                ->on('maestro_facultades_unidades');

            $table->foreign('codigo_programa_ingreso')
                ->references('codigo')
                ->on('maestro_programas');

            $table->foreign(['pertenencia_codigo_categoria', 'pertenencia_costumbres_antepasados'])
                ->references(['codigo_categoria', 'codigo'])
                ->on('catalogo_maestro_pueblo_indigenas');

            $table->foreign(['pueblo_indigena_codigo_categoria', 'pueblo_indigena_originario'])
                ->references(['codigo_categoria', 'codigo'])
                ->on('catalogo_maestro_pueblo_indigenas');

            $table->foreign(['habla_lengua_codigo_categoria', 'habla_lengua_indigena'])
                ->references(['codigo_categoria', 'codigo'])
                ->on('catalogo_maestro_lenguas_indigenas');

            $table->foreign(['lengua_indigena_codigo_categoria', 'lengua_indigena_originaria'])
                ->references(['codigo_categoria', 'codigo'])
                ->on('catalogo_maestro_lenguas_indigenas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulantes');
    }
};
