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
             'nombre_usuario' => $this->faker->sentence(),
             'correo' => $this->faker->unique()->safeEmail(),
             'contraseña'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             'rol'=>$this->faker->sentence(),
             
        ];
    }
}