<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{

     
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this ->faker ->name,
            'telefono'=> $this ->faker -> phoneNumber,
            'direccion'=> $this ->faker -> address,
            'turno'=> $this ->faker ->numberbetween(1, 10)
        ];
    }
}
