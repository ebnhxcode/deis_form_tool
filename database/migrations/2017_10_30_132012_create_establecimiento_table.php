<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientoTable extends Migration
{
    public function up () {
        Schema::create('establecimiento', function (Blueprint $table) {
            #$table->increments('id_establecimiento');
            $table->string('id_establecimiento')->unsigned()->nullable(true);
            $table->string('id_establecimiento_antiguo')->unsigned()->nullable(true);
            $table->string('id_servicio')->unsigned()->nullable(true);
            $table->string('id_region')->unsigned()->nullable(true);
            $table->string('id_comuna')->unsigned()->nullable(true);
            $table->string('nombre_establecimiento')->unsigned()->nullable(true);
            $table->string('tipo_establecimiento')->unsigned()->nullable(true);
            $table->string('vigencia_desde')->unsigned()->nullable(true);
            $table->string('fecha_cierre')->unsigned()->nullable(true);

            $table->timestamps();
        });
    }


    public function down () {
        Schema::drop('establecimiento');
    }
}
