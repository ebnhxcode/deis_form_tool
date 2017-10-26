<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormDeisInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_deis_inputs', function (Blueprint $table) {
            $table->increments('id_input');

            $table->string('type');
            $table->string('id');
            $table->string('name');
            $table->string('value');
            $table->string('max_lenght');
            $table->string('placeholder');
            $table->string('required');
            $table->string('class');
            $table->string('style');

            $table->string('bloque');
            $table->string('seccion');
            $table->string('class_custom');
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
        Schema::drop('form_deis_inputs');
    }
}
