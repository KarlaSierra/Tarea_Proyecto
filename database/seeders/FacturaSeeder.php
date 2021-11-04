<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // PARA CREAR ELEMENTOS 
        Factura::Factory(500)->create();
    }
}
