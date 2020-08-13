<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Deletecarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
       
        CREATE TRIGGER deletecarrito after insert ON detalles
        FOR EACH
        ROW
             DELETE from carritos USING carritos,detalles where detalles.codigo_producto = carritos.codigo_producto;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
