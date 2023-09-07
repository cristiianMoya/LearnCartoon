<?php

namespace Database\Seeders;

use App\Models\usuario;
use App\Models\seccion;
use App\Models\actividad;
use App\Models\tema;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        usuario::factory(6)->create();
        seccion::factory(4)->create();
        actividad::factory(4)->create();
        tema::factory(4)->create();
    }

}
