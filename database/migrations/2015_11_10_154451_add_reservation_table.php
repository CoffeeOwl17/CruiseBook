<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('reservation_id');
            $table->string('passenger_id');
            $table->integer('package_id')->unsigned();
            $table->integer('cruise_cabin')->unsigned();

            $table->foreign('passenger_id')
                ->references('passenger_id')->on('passenger');

            $table->foreign('package_id')
                ->references('id')->on('cruise_package');

            $table->foreign('cruise_cabin')
                ->references('id')->on('cruise_cabin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservation');
    }
}
