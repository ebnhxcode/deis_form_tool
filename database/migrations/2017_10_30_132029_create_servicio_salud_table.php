<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioSaludTable extends Migration
{
    public function up () {
        Schema::create('servicio_salud', function (Blueprint $table) {
            #$table->increments('id_establecimiento');
            $table->string('id_sericio_salud')->unsigned()->nullable(true);
            $table->string('id_region')->unsigned()->nullable(true);
            $table->string('nombre_servicio_salud')->unsigned()->nullable(true);
            $table->string('orden')->unsigned()->nullable(true);

            $table->timestamps();
        });
    }

    public function down () {
        Schema::drop('servicio_salud');
    }
}
