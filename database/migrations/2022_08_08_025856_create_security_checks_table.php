<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('check_result');
            $table->string('comments');
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
        Schema::dropIfExists('security_checks');
    }
}
