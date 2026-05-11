<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(CatalogoMaestroGeneralSeeder::class);
        $this->call(CatalogoMaestroPuebloIndigenasSeeder::class);
        $this->call(CatalogoMaestroLenguasIndigenasSeeder::class);
        $this->call(MaestroFacultadesUnidadesSeeder::class);
        $this->call(MaestroProgramasSeeder::class);
        $this->call(MaestroPaisSeeder::class);
        $this->call(MaestroNacionalidadSeeder::class);
        $this->call(MaestroProcesosAdmisionSeeder::class);
        $this->call(MaestroUbigeoSeeder::class);
        $this->call(MaestroFilialSeeder::class);
        $this->call(PostulantesSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
