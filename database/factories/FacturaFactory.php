<?php

namespace Database\Factories;

use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{

     /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente'=> $this ->faker ->name,
            'nombre_empleado'=> $this ->faker ->name,
            'producto'=> $this ->faker ->text,
            'total'=> $this ->faker ->numberbetween(10, 5000)
        ];
    }
}
