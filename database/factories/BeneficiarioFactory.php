<?php

namespace Database\Factories;

use App\Models\Beneficiario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeneficiarioFactory extends Factory
{
    protected $model = Beneficiario::class;

    public function definition()
    {
        return [
			'cui' => fake()->name(),
			'primer_nombre' => fake()->name(),
			'segundo_nombre' => fake()->name(),
			'primer_apellido' => fake()->name(),
			'segundo_apellido' => fake()->name(),
			'celular' => fake()->name(),
			'correo' => fake()->name(),
			'sexo' => fake()->name(),
			'fecha_nacimiento' => fake()->name(),
			'estado_civil' => fake()->name(),
			'activo' => fake()->name(),
        ];
    }
}
