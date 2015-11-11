<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCruiseCabinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise_cabin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cruise_cabin');
            $table->integer('cabinClass_id')->unsigned();
            $table->integer('cruise_id')->unsigned();

            $table->foreign('cabinClass_id')
                ->references('cabinClass_id')->on('cabin_class')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cruise_id')
                ->references('cruise_id')->on('cruise')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cruise_cabin');
    }
}
