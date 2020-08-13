<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre_categoria' => 'Maquinarias',
            'estado' => 'ACTIVO',
            
        ]);
        DB::table('categorias')->insert([
            'nombre_categoria' => 'Herramientas',
            'estado' => 'ACTIVO',
        
        ]);
    }
}
