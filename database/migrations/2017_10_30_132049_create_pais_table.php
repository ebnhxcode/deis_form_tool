<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{

    public function up () {
        Schema::create('pais', function (Blueprint $table) {
            #$table->increments('id_establecimiento');
            $table->string('id_pais')->unsigned()->nullable(true);
            $table->string('nombre_pais')->unsigned()->nullable(true);

            $table->timestamps();
        });
    }

    public function down () {
        Schema::drop('pais');
    }
}
