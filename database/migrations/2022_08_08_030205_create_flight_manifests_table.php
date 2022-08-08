<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightManifestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_manifests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('booking_id')->unsigned();
            $table->bigInteger('flight_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('flight_id')->references('id')->on('flights');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_manifests');
    }
}
