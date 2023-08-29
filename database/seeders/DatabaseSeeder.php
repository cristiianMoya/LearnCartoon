<?php

namespace Database\Seeders;
use App\Models\usuario;
use App\Models\seccion;
use App\Models\actividad;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
usuario::factory(10)->create();
seccion::factory(10)->create();
actividad::factory(10)->create();

    }
}
