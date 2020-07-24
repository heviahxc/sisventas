<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'rut' => '198736481',
            'contrasena' => 'vidal123',           
            'tipo_usuario' => 'administrador',
            'nombre' => 'juan',
            'apellidos' => 'vidal vasquez',           
            'correo' => 'juan.vidal@ucm.cl',
            'fono' => '986420880',
        ]);
        DB::table('usuarios')->insert([
            'rut' => '198968374',
            'contrasena' => 'hevia123',           
            'tipo_usuario' => 'administrador',
            'nombre' => 'felipe',
            'apellidos' => 'hevia troncoso',           
            'correo' => 'felipe.hevia@ucm.cl',
            'fono' => '976583251',
       
        ]);
    }
}
