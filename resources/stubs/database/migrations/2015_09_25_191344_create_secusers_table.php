<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecUsersTable extends Migration
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
            $table->tinyInteger('invalidAttempts', false);
            $table->tinyInteger('status', false);
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
