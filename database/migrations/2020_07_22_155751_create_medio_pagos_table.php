<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedioPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medio_pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_boleta');
            $table->unsignedBigInteger('codigo_pago');
            $table->integer('total_pago');

            $table->foreign('codigo_boleta')->references('id')->on('boletas');
            $table->foreign('codigo_pago')->references('id')->on('tipo_pagos');
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
        Schema::dropIfExists('medio_pagos');
    }
}
