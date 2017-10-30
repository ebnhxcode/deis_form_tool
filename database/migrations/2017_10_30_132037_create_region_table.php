<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionTable extends Migration
{
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            #$table->increments('id_establecimiento');
            $table->string('id_region')->unsigned()->nullable(true);
            $table->string('nombre_region')->unsigned()->nullable(true);
            $table->string('alias')->unsigned()->nullable(true);
            $table->string('orden')->unsigned()->nullable(true);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('region');
    }
}
