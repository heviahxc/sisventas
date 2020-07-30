<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
       
        $this->call(TipoPagoSeeder::class);

        $this->call(PermissionSeeder::class);

    }
}
