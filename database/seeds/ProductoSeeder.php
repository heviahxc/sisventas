<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Compresor',
            'precio' => '200000',           
            'stock' => '20',
            'id_categoria' => '1',
            'imagen'=>'imagen1',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pulidora',
            'precio' => '80000',           
            'stock' => '50',
            'id_categoria' => '2',
            'imagen'=>'imagen2',
       
        ]);
    }
}
