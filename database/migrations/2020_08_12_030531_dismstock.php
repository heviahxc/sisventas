<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dismstock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        delimiter //
        CREATE TRIGGER aumstock before DELETE ON carritos
        FOR EACH
        ROW
        BEGIN
             UPDATE productos,carritos,users
            SET productos.stock = productos.stock + old.cantidad
            WHERE productos.id = old.codigo_producto;
        END;
        //
        delimiter ;
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
