<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Upedituser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        create TRIGGER upper_editusers BEFORE UPDATE ON users FOR EACH ROW SET NEW.name = UPPER(NEW.name), NEW.apellidos = UPPER(NEW.apellidos)
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
