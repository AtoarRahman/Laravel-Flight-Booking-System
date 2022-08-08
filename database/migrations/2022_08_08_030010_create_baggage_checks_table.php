<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaggageChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baggage_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('check_result');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('booking_id')->unsigned();
            $table->bigInteger('passenger_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('passenger_id')->references('id')->on('passengers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baggage_checks');
    }
}
