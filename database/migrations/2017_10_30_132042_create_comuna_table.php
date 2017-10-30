<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunaTable extends Migration
{
    public function up()
    {
        Schema::create('comuna', function (Blueprint $table) {
            #$table->increments('id_establecimiento');
            $table->string('id_comuna')->unsigned()->nullable(true);
            $table->string('id_region')->unsigned()->nullable(true);
            $table->string('nombre_comuna')->unsigned()->nullable(true);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('comuna');
    }
}
