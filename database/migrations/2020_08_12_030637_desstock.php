<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Desstock extends Migration
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
        CREATE TRIGGER destock AFTER INSERT ON carritos
        FOR EACH
        ROW
        BEGIN
             UPDATE productos,carritos
            SET productos.stock = productos.stock - new.cantidad
            WHERE productos.id = new.codigo_producto;
        END
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
