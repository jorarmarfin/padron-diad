<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaestroFacultadesUnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $rows = [
            [
                'codigo' => 14,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Arquitectura, Urbanismo y Artes',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 15,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ciencias',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 16,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Ambiental',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 17,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Civil',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 18,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria de Petroleo, Gas Natural y Petroquimica',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 19,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Economica, Estadistica y Ciencias Sociales',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 20,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Electrica y Electronica',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 21,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Geologica, Minera y Metalurgica',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 22,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Industrial y de Sistemas',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 23,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Mecanica',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 24,
                'tipo' => 'Facultad',
                'nombre' => 'Facultad de Ingenieria Quimica y Textil',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 13,
                'tipo' => 'No consignado',
                'nombre' => 'No Consignado',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
            [
                'codigo' => 25,
                'tipo' => 'Escuela de Posgrado',
                'nombre' => 'Escuela de Posgrado',
                'vigencia' => 'Vigente',
                'activo' => true,
            ],
        ];

        $rows = array_map(static fn (array $row): array => $row + [
            'created_at' => $now,
            'updated_at' => $now,
        ], $rows);

        DB::table('maestro_facultades_unidades')->insert($rows);
    }
}
