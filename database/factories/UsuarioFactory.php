<?php

namespace Database\Factories;
use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() 
    {
        return [
             'nombre_usuario' => $this->faker->sentence(2),
             'correo' => $this->faker->sentence(2),
             'contraseña'=>$this->faker->sentence(2),
             'rol'=>$this->faker->sentence(2),
             
        ];
    }
}