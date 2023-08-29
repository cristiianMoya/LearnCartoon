<?php

namespace Database\Factories;
use App\Models\actividad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_actividad'=> $this->faker->sentence(),
            'seccion_id'=>App\seccion::all()->random()->id,
            
        ];
    }
}
$table->id();
$table->string('nombre_actividad');
$table->unsignedBigInteger('seccion_id')->unique();
//cramos la relacion a nivel de migraciones
$table->foreign('seccion_id')
->references('id')
->on('seccions')
->onDelete('cascade')
->onUpdate('cascade');