<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaestroFilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'codigo' => 'S',
                'departamento' => 'Lima',
                'provincia' => 'Lima',
                'vigencia' => 'Vigente',
                'EFI' => 'No',
                'activo' => true,
            ],

        ];
        $now = now();
        $rows = array_map(static fn (array $row): array => $row + [
            'created_at' => $now,
            'updated_at' => $now,
        ], $rows);

        DB::table('maestro_filiales')->insert($rows);
    }
}
