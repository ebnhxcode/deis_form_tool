<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name')->nullable(true);
            $table->string('full_name')->nullable(true);
            $table->string('position')->nullable(true);
            $table->string('establecimiento')->nullable(true);
            $table->string('rut')->nullable(true);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('created_by')->nullable(true);
            $table->string('updated_by')->nullable(true);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
