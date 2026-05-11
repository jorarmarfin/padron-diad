<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostulantesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $catalogo = static fn (string $catalogo): ?object => DB::table('catalogo_maestro_general')
            ->where('catalogo', $catalogo)
            ->orderBy('codigo')
            ->first();

        $tipoProceso = $catalogo('tipo_proceso');
        $tipoDocumento = $catalogo('tipo_documento');
        $soloUnApellido = $catalogo('solo_un_apellido');
        $sexo = $catalogo('sexo');
        $condicionDiscapacidad = $catalogo('condicion_discapacidad');
        $tipoDiscapacidad = $catalogo('tipo_discapacidad');
        $modalidadAdmision = $catalogo('modalidad_admision');
        $modalidadEstudio = $catalogo('modalidad_estudio');

        $codigoSedeFilial = DB::table('maestro_filiales')->value('codigo');
        $codigoPais = DB::table('maestro_pais')->value('codigo');
        $codigoNacionalidad = DB::table('maestro_nacionalidad')->value('codigo');
        $codigoUbigeo = DB::table('maestro_ubigeo')->value('codigo');
        $codigoFacultad = DB::table('maestro_facultades_unidades')->value('codigo');
        $codigoPrograma = DB::table('maestro_programas')->value('codigo');
        $maestroProcesoId = DB::table('maestro_procesos_admision')->value('id');

        $pertenencia = DB::table('catalogo_maestro_pueblo_indigenas')
            ->where('codigo_categoria', 1)
            ->orderBy('codigo')
            ->first();

        $pueblo = DB::table('catalogo_maestro_pueblo_indigenas')
            ->where('codigo_categoria', 2)
            ->orderBy('codigo')
            ->first();

        $hablaLengua = DB::table('catalogo_maestro_lenguas_indigenas')
            ->where('codigo_categoria', 1)
            ->orderBy('codigo')
            ->first();

        $lengua = DB::table('catalogo_maestro_lenguas_indigenas')
            ->where('codigo_categoria', 2)
            ->orderBy('codigo')
            ->first();

        DB::table('postulantes')->insert([
            [
                'codigo_sede_filial' => $codigoSedeFilial,
                'tipo_proceso_catalogo_codigo' => $tipoProceso?->catalogo_codigo,
                'tipo_proceso' => $tipoProceso?->codigo,
                'proceso_admision' => '202401',
                'numero_convocatoria' => 1,
                'tipo_documento_catalogo_codigo' => $tipoDocumento?->catalogo_codigo,
                'tipo_documento' => $tipoDocumento?->codigo,
                'nro_documento' => '72589014',
                'nombres' => 'JUAN',
                'primer_apellido' => 'REYES',
                'segundo_apellido' => 'GARCIA',
                'apellido_casada' => null,
                'solo_un_apellido_catalogo_codigo' => $soloUnApellido?->catalogo_codigo,
                'solo_un_apellido' => $soloUnApellido?->codigo,
                'sexo_catalogo_codigo' => $sexo?->catalogo_codigo,
                'sexo' => $sexo?->codigo,
                'fecha_nacimiento' => '2002-05-15',
                'pais_nacimiento' => $codigoPais,
                'nacionalidad' => $codigoNacionalidad,
                'ubigeo_nacimiento' => $codigoUbigeo,
                'ubigeo_domicilio' => $codigoUbigeo,
                'condicion_discapacidad_catalogo_codigo' => $condicionDiscapacidad?->catalogo_codigo,
                'condicion_discapacidad' => $condicionDiscapacidad?->codigo,
                'tipo_discapacidad_catalogo_codigo' => $tipoDiscapacidad?->catalogo_codigo,
                'tipo_discapacidad' => $tipoDiscapacidad?->codigo,
                'celular' => '987654321',
                'correo_personal' => 'juan.reyes@gmail.com',
                'codigo_facultad_unidad_opcion_1' => $codigoFacultad,
                'codigo_facultad_unidad_opcion_2' => null,
                'codigo_facultad_unidad_opcion_3' => null,
                'codigo_programa_opcion_1' => $codigoPrograma,
                'codigo_programa_opcion_2' => null,
                'codigo_programa_opcion_3' => null,
                'fecha_postulacion' => '2024-02-10',
                'puntaje_obtenido' => 85.50000,
                'modalidad_admision_catalogo_codigo' => $modalidadAdmision?->catalogo_codigo,
                'modalidad_admision' => $modalidadAdmision?->codigo,
                'modalidad_estudio_catalogo_codigo' => $modalidadEstudio?->catalogo_codigo,
                'modalidad_estudio' => $modalidadEstudio?->codigo,
                'es_ingresante' => '1',
                'codigo_facultad_unidad_ingreso' => $codigoFacultad,
                'codigo_programa_ingreso' => $codigoPrograma,
                'fecha_ingreso' => '2024-08-01',
                'correo_institucional' => 'juan.reyes@unmsm.edu.pe',
                'codigo_orcid' => null,
                'pertenencia_codigo_categoria' => $pertenencia?->codigo_categoria,
                'pertenencia_costumbres_antepasados' => $pertenencia?->codigo,
                'pueblo_indigena_codigo_categoria' => $pueblo?->codigo_categoria,
                'pueblo_indigena_originario' => $pueblo?->codigo,
                'habla_lengua_codigo_categoria' => $hablaLengua?->codigo_categoria,
                'habla_lengua_indigena' => $hablaLengua?->codigo,
                'lengua_indigena_codigo_categoria' => $lengua?->codigo_categoria,
                'lengua_indigena_originaria' => $lengua?->codigo,
                'nombres_materno' => 'ROSA',
                'primer_apellido_materno' => 'MENDOZA',
                'segundo_apellido_materno' => 'FLORES',
                'apellido_casada_materno' => null,
                'nombres_paterno' => 'CARLOS',
                'primer_apellido_paterno' => 'REYES',
                'segundo_apellido_paterno' => 'TORRES',
                'maestro_proceso_admision_id' => $maestroProcesoId,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
