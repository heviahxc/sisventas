<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo_producto');
            $table->unsignedBigInteger('codigo_boleta');
            $table->integer('cantidad');
            $table->integer('precio_unitario');
            $table->integer('total');

            $table->foreign('codigo_producto')->references('id')->on('productos');
            $table->foreign('codigo_boleta')->references('id')->on('boletas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
}
