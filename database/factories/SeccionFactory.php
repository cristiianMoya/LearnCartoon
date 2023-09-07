<?php

namespace Database\Factories;
use App\Models\seccion;
use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\seccion>
 */
class SeccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'nombre_seccion' => $this->faker->sentence(2)
        ];
    }
}
