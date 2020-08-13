<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Upeditcategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        create TRIGGER upper_editcategoria BEFORE UPDATE ON categorias FOR EACH ROW SET NEW.nombre_categoria = UPPER(NEW.nombre_categoria ),NEW.estado = UPPER(NEW.estado )
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
