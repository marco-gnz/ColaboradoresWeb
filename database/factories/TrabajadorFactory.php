<?php

namespace Database\Factories;

use App\Models\trabajador;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TrabajadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = trabajador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid'                  => $this->faker->unique()->uuid,
            'rut'                   => Str::random(7).'-'. 9,
            'nombres'               => $this->faker->name,
            'ap_paterno'    => $this->faker->name,
            'ap_materno'    => $this->faker->name,
            'mail'          => $this->faker->unique()->safeEmail,
            'ciudad'        => $this->faker->name,
            'id_estado_trabajador' => 1,
            'id_previcion_salud'    => 1,
            'id_afp'                => 1,
            'id_tipo_pago'          => 1,
            'id_users'              => 1,
        ];
    }
}
