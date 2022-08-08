<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('flight_id');
            $table->tinyInteger('status');
            $table->string('booking_platform');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('passenger_id')->unsigned();
            $table->foreign('passenger_id')->references('id')->on('passengers');
        });

        DB::table('bookings')->insert(array(
            array('id' => '1', 'flight_id' => '1', 'booking_platform' => 'Platform 1', 'status' => '1','passenger_id' => '1','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2', 'flight_id' => '1', 'booking_platform' => 'Platform 2', 'status' => '1','passenger_id' => '1','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3', 'flight_id' => '2', 'booking_platform' => 'Platform 3', 'status' => '1','passenger_id' => '2','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4', 'flight_id' => '2', 'booking_platform' => 'Platform 3', 'status' => '1','passenger_id' => '2','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '5', 'flight_id' => '3', 'booking_platform' => 'Platform 2', 'status' => '1','passenger_id' => '3','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL)
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
