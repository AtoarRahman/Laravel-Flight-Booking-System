<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBaggageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baggage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('weight_in_kg', 4, 2);
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('booking_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings');
        });

        DB::table('bookings')->insert(array(
            array('id' => '1', 'weight_in_kg' => '11', 'booking_id' => '1','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2', 'weight_in_kg' => '12', 'booking_id' => '1','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3', 'weight_in_kg' => '24', 'booking_id' => '2','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4', 'weight_in_kg' => '22', 'booking_id' => '2','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '5', 'weight_in_kg' => '43', 'booking_id' => '3','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL)
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baggage');
    }
}
