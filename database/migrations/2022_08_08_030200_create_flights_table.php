<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departing_gate');
            $table->string('arriving_gate');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('airline_id')->unsigned();
            $table->bigInteger('departing_airport_id')->unsigned();
            $table->bigInteger('arriving_airport_id')->unsigned();
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->foreign('departing_airport_id')->references('id')->on('airports');
            $table->foreign('arriving_airport_id')->references('id')->on('airports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
