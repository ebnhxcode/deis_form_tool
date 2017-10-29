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

            $table->string('type')->unsigned()->nullable(true);
            $table->string('id')->unsigned()->nullable(true);
            $table->string('name')->unsigned()->nullable(true);
            $table->string('value')->unsigned()->nullable(true);
            $table->string('max_lenght')->unsigned()->nullable(true);
            $table->string('placeholder')->unsigned()->nullable(true);
            $table->string('required')->unsigned()->nullable(true);
            $table->string('class')->unsigned()->nullable(true);
            $table->string('style')->unsigned()->nullable(true);
            $table->string('bloque')->unsigned()->nullable(true);
            $table->string('seccion')->unsigned()->nullable(true);
            $table->string('class_custom')->unsigned()->nullable(true);
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
