<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruisePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package_name');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('departure_location');
            $table->string('arrival_location');
            $table->integer('cruise_id')->unsigned();

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
        Schema::drop('cruise_package');
    }
}
