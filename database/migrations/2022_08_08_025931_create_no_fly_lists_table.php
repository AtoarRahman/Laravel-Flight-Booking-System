<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoFlyListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_fly_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('active_from');
            $table->date('active_to');
            $table->string('no_fly_reason');
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('passenger_id')->unsigned();
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
        Schema::dropIfExists('no_fly_lists');
    }
}
