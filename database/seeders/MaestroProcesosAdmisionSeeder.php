<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaestroProcesosAdmisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $unidadNombres = [
            14 => 'Facultad de Arquitectura, Urbanismo y Artes',
            15 => 'Facultad de Ciencias',
            16 => 'Facultad de Ingenieria Ambiental',
            17 => 'Facultad de Ingenieria Civil',
            18 => 'Facultad de Ingenieria de Petroleo, Gas Natural y Petroquimica',
            19 => 'Facultad de Ingenieria Economica, Estadistica y Ciencias Sociales',
            21 => 'Facultad de Ingenieria Geologica, Minera y Metalurgica',
            23 => 'Facultad de Ingenieria Mecanica',
            24 => 'Facultad de Ingenieria Quimica y Textil',
            22 => 'Facultad de Ingenieria Industrial y de Sistemas',
            20 => 'Facultad de Ingenieria Electrica y Electronica',
        ];

        $convocatorias = [
            [
                'anio' => '2024-1',
                'numero_convocatoria' => 1,
                'fecha_inicio' => '2023-09-25',
                'fecha_fin' => '2023-12-03',
                'fecha_inicio_carga' => '2024-04-29',
                'fecha_fin_carga' => '2024-12-02',
                'vacantes' => [
                    14 => 13,
                    15 => 20,
                    16 => 20,
                    17 => 19,
                    18 => 9,
                    19 => 16,
                    21 => 16,
                    23 => 22,
                    24 => 17,
                    22 => 32,
                    20 => 23,
                ],
            ],
            [
                'anio' => '2024-1',
                'numero_convocatoria' => 2,
                'fecha_inicio' => '2024-01-02',
                'fecha_fin' => '2024-02-04',
                'fecha_inicio_carga' => '2024-04-29',
                'fecha_fin_carga' => '2024-12-02',
                'vacantes' => [
                    14 => 17,
                    15 => 32,
                    16 => 33,
                    17 => 27,
                    18 => 10,
                    19 => 24,
                    21 => 23,
                    23 => 42,
                    24 => 28,
                    22 => 43,
                    20 => 36,
                ],
            ],
            [
                'anio' => '2024-1',
                'numero_convocatoria' => 3,
                'fecha_inicio' => '2024-02-05',
                'fecha_fin' => '2024-02-17',
                'fecha_inicio_carga' => '2024-04-29',
                'fecha_fin_carga' => '2024-12-02',
                'vacantes' => [
                    14 => 49,
                    15 => 149,
                    16 => 114,
                    17 => 103,
                    18 => 48,
                    19 => 87,
                    21 => 107,
                    23 => 165,
                    24 => 101,
                    22 => 143,
                    20 => 152,
                ],
            ],
            [
                'anio' => '2024-2',
                'numero_convocatoria' => 1,
                'fecha_inicio' => '2024-06-10',
                'fecha_fin' => '2024-07-30',
                'fecha_inicio_carga' => '2024-10-03',
                'fecha_fin_carga' => '2024-12-02',
                'vacantes' => [
                    14 => 17,
                    15 => 30,
                    16 => 33,
                    17 => 28,
                    18 => 10,
                    19 => 24,
                    21 => 39,
                    23 => 23,
                    24 => 48,
                    22 => 37,
                    20 => 24,
                ],
            ],
            [
                'anio' => '2024-2',
                'numero_convocatoria' => 2,
                'fecha_inicio' => '2024-06-10',
                'fecha_fin' => '2024-08-05',
                'fecha_inicio_carga' => '2024-10-03',
                'fecha_fin_carga' => '2024-12-02',
                'vacantes' => [
                    14 => 38,
                    15 => 57,
                    16 => 82,
                    17 => 71,
                    18 => 27,
                    19 => 59,
                    21 => 100,
                    23 => 68,
                    24 => 117,
                    22 => 96,
                    20 => 45,
                ],
            ],
            [
                'anio' => '2025-1',
                'numero_convocatoria' => 1,
                'fecha_inicio' => '2024-09-25',
                'fecha_fin' => '2025-03-04',
                'fecha_inicio_carga' => '2025-02-28',
                'fecha_fin_carga' => '2025-05-29',
                'vacantes' => [
                    14 => 71,
                    15 => 224,
                    16 => 151,
                    17 => 150,
                    18 => 79,
                    19 => 129,
                    21 => 150,
                    23 => 264,
                    24 => 126,
                    22 => 203,
                    20 => 220,
                ],
            ],
            [
                'anio' => '2025-2',
                'numero_convocatoria' => 1,
                'fecha_inicio' => '2025-07-01',
                'fecha_fin' => '2025-08-26',
                'fecha_inicio_carga' => '2025-08-20',
                'fecha_fin_carga' => '2025-11-18',
                'vacantes' => [
                    14 => 114,
                    15 => 214,
                    16 => 166,
                    17 => 128,
                    18 => 69,
                    19 => 129,
                    21 => 147,
                    23 => 229,
                    24 => 107,
                    22 => 220,
                    20 => 222,
                ],
            ],
            [
                'anio' => '2026-1',
                'numero_convocatoria' => 1,
                'fecha_inicio' => '2025-10-20',
                'fecha_fin' => '2026-02-24',
                'fecha_inicio_carga' => '2026-08-20',
                'fecha_fin_carga' => '2026-11-18',
                'vacantes' => [
                    14 => 114,
                    15 => 214,
                    16 => 166,
                    17 => 128,
                    18 => 69,
                    19 => 129,
                    21 => 147,
                    23 => 229,
                    24 => 107,
                    22 => 220,
                    20 => 222,
                ],
            ],
        ];

        $rows = [];

        foreach ($convocatorias as $convocatoria) {
            foreach ($convocatoria['vacantes'] as $codigoUnidad => $vacante) {
                $rows[] = [
                    'sede_filial' => 'S',
                    'tipo_proceso' => 'Regular',
                    'nivel_academico' => 'Carrera Profesional',
                    'anio' => $convocatoria['anio'],
                    'numero_convocatoria' => $convocatoria['numero_convocatoria'],
                    'codigo_entidad_unidad' => $codigoUnidad,
                    'codigo_entidad_programa' => null,
                    'unidad' => $unidadNombres[$codigoUnidad],
                    'programa' => null,
                    'vacante_convocatoria' => $vacante,
                    'fecha_inicio' => $convocatoria['fecha_inicio'],
                    'fecha_fin' => $convocatoria['fecha_fin'],
                    'fecha_inicio_carga' => $convocatoria['fecha_inicio_carga'],
                    'fecha_fin_carga' => $convocatoria['fecha_fin_carga'],
                ];
            }
        }

        $rows = array_map(static fn (array $row): array => $row + [
            'created_at' => $now,
            'updated_at' => $now,
        ], $rows);

        DB::table('maestro_procesos_admision')->insert($rows);
    }
}
