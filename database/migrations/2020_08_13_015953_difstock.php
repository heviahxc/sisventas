<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Difstock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
       
        CREATE TRIGGER difstock after insert ON detalles 
        FOR EACH ROW 
        UPDATE productos,detalles SET productos.stock = productos.stock - new.cantidad WHERE
         productos.id = new.codigo_producto;
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
