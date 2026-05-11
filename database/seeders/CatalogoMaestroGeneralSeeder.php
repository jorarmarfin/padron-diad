<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoMaestroGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $tipoProceso = 1;
        $tipoDocumento = 2;
        $soloUnApellido = 3;
        $sexo = 4;
        $modalidadAdmision = 5;
        $modalidadEstudio = 6;
        $condicionDiscapacidad = 7;
        $tipoDiscapacidad = 8;

        $rows = [
            ['catalogo_codigo' => $tipoProceso, 'catalogo' => 'tipo_proceso', 'codigo' => 1, 'descripcion' => 'Regular', 'activo' => true],
            ['catalogo_codigo' => $tipoProceso, 'catalogo' => 'tipo_proceso', 'codigo' => 14, 'descripcion' => 'Regularizacion', 'activo' => true],

            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 1, 'descripcion' => 'Documento Nacional de Identidad', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 2, 'descripcion' => 'Pasaporte', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 3, 'descripcion' => 'Carne de Extranjeria', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 4, 'descripcion' => 'Cedula de identidad', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 5, 'descripcion' => 'Documento Extranjero - Otros', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 6, 'descripcion' => 'Permiso Temporal de Permanencia', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 7, 'descripcion' => 'Carne de Identidad', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 8, 'descripcion' => 'Cedula de Ciudadania', 'activo' => true],
            ['catalogo_codigo' => $tipoDocumento, 'catalogo' => 'tipo_documento', 'codigo' => 9, 'descripcion' => 'Carne Temporal de Permanencia', 'activo' => true],

            ['catalogo_codigo' => $soloUnApellido, 'catalogo' => 'solo_un_apellido', 'codigo' => 0, 'descripcion' => 'Indica que tiene los dos apellidos', 'activo' => true],
            ['catalogo_codigo' => $soloUnApellido, 'catalogo' => 'solo_un_apellido', 'codigo' => 1, 'descripcion' => 'Indica que solo tiene un apellido', 'activo' => true],

            ['catalogo_codigo' => $sexo, 'catalogo' => 'sexo', 'codigo' => 1, 'descripcion' => 'Masculino', 'activo' => true],
            ['catalogo_codigo' => $sexo, 'catalogo' => 'sexo', 'codigo' => 2, 'descripcion' => 'Femenino', 'activo' => true],

            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 1, 'descripcion' => 'Titulados o Graduados', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 2, 'descripcion' => 'Traslados Internos', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 3, 'descripcion' => 'Traslados Externos', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 4, 'descripcion' => 'Primeros Puestos', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 5, 'descripcion' => 'Deportistas Destacados', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 6, 'descripcion' => 'Becas', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 7, 'descripcion' => 'Personas con Discapacidad', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 8, 'descripcion' => 'Regular - Ordinario', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 9, 'descripcion' => 'CEPRE', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 12, 'descripcion' => 'Comunidades Nativas', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 43, 'descripcion' => 'Fuerzas Armadas', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 14, 'descripcion' => 'Victimas de Terrorismo', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 63, 'descripcion' => 'Via escolar', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 69, 'descripcion' => 'Gente que Trabaja', 'activo' => true],
            ['catalogo_codigo' => $modalidadAdmision, 'catalogo' => 'modalidad_admision', 'codigo' => 10, 'descripcion' => 'Otras Modalidades', 'activo' => true],

            ['catalogo_codigo' => $modalidadEstudio, 'catalogo' => 'modalidad_estudio', 'codigo' => 1, 'descripcion' => 'Presencial', 'activo' => true],
            ['catalogo_codigo' => $modalidadEstudio, 'catalogo' => 'modalidad_estudio', 'codigo' => 2, 'descripcion' => 'Semi-Presencial', 'activo' => true],
            ['catalogo_codigo' => $modalidadEstudio, 'catalogo' => 'modalidad_estudio', 'codigo' => 3, 'descripcion' => 'A distancia', 'activo' => true],

            ['catalogo_codigo' => $condicionDiscapacidad, 'catalogo' => 'condicion_discapacidad', 'codigo' => 1, 'descripcion' => 'Si', 'activo' => true],
            ['catalogo_codigo' => $condicionDiscapacidad, 'catalogo' => 'condicion_discapacidad', 'codigo' => 0, 'descripcion' => 'No', 'activo' => true],

            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 1, 'descripcion' => 'Discapacidad Motriz', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 2, 'descripcion' => 'Discapacidad Visual', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 3, 'descripcion' => 'Visual y Esquema Corporal', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 4, 'descripcion' => 'Disminuidos Visuales', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 5, 'descripcion' => 'Discapacidad Auditiva', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 6, 'descripcion' => 'Autismo', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 7, 'descripcion' => 'Discapacidad Mental', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 8, 'descripcion' => 'Paralisis Cerebral', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 9, 'descripcion' => 'Discapacidad Intelectual', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 10, 'descripcion' => 'Sordoceguera', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 11, 'descripcion' => 'No Cuenta con Informacion', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 12, 'descripcion' => 'Otros', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 13, 'descripcion' => 'Sindrome de Asperger', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 14, 'descripcion' => 'Hemiplejia no Identificada', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 15, 'descripcion' => 'Estenosis Congenita de la Valvula Aortica', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 16, 'descripcion' => 'Multidiscapacidad', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 17, 'descripcion' => 'Discapacidad Fisica', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 18, 'descripcion' => 'Transtorno del Espectro Autista', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 19, 'descripcion' => 'T. por Deficit de Atencion con Hiperactividad', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 20, 'descripcion' => 'T. Especifico del Aprendizaje', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 21, 'descripcion' => 'T. Mentales y del Comportamiento', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 22, 'descripcion' => 'Enfermedades Raras', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 23, 'descripcion' => 'Talla Baja', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 24, 'descripcion' => 'Talento', 'activo' => true],
            ['catalogo_codigo' => $tipoDiscapacidad, 'catalogo' => 'tipo_discapacidad', 'codigo' => 25, 'descripcion' => 'Superdotacion', 'activo' => true],
        ];

        $rows = array_map(static fn (array $row): array => $row + [
            'created_at' => $now,
            'updated_at' => $now,
        ], $rows);

        DB::table('catalogo_maestro_general')->insert($rows);
    }
}
