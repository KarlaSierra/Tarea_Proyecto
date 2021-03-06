<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'telefono'=> $this ->faker -> phoneNumber,
            'direccion'=> $this ->faker -> address,
            'producto'=>$this->faker->text(10),
            'cantidad'=>$this->faker->numberbetween(10, 5000)
        ];
    }
}
