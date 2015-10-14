<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecUsers', function (Blueprint $table) {
            $table->increments('userId');
            $table->char('email', 50);
            $table->string('password', 60);
            $table->string('lastName', 50);
            $table->string('firstName', 50);
            $table->char('changePassword', 1);
            $table->dateTime('lastPasswordChange');
            $table->tinyInteger('invalidAttempts', 3);
            $table->tinyInteger('status', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SecUsers');
    }
}
