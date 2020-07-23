<?php

use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_pagos')->insert([
            'descripcion' => 'PayPal',
            
        ]);
        DB::table('tipo_pagos')->insert([
            'descripcion' => 'Red Compra',
        ]);
        DB::table('tipo_pagos')->insert([
            'descripcion' => 'Visa',
        ]);
        DB::table('tipo_pagos')->insert([
            'descripcion' => 'Master Card',
        ]);
    }
}
