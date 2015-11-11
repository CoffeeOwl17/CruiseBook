<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passenger', function (Blueprint $table) {
            $table->string('passenger_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->char('gender', 2);
            $table->date('dob');
            $table->string('email');
            $table->text('address');

            $table->primary('passenger_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('passenger');
    }
}
