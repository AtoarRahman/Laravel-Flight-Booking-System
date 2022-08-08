<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->format('Y-m-d');
            $table->string('country_of_citizenship');
            $table->string('country_of_residence');
            $table->string('passport_number');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('passengers')->insert(array(
            array('id' => '1', 'first_name' => 'Abdul', 'last_name' => 'Momen', 'date_of_birth' => '1980-01-03','country_of_citizenship' => 'Bangladesh','country_of_residence' => 'Bangladesh','passport_number' => 'BN1365456498454','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2', 'first_name' => 'Karim', 'last_name' => 'Uddin', 'date_of_birth' => '1990-05-15','country_of_citizenship' => 'Bangladesh','country_of_residence' => 'Bangladesh','passport_number' => 'BN1365456676745','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3', 'first_name' => 'Jasim', 'last_name' => 'Mia', 'date_of_birth' => '1990-05-15','country_of_citizenship' => 'Bangladesh','country_of_residence' => 'Bangladesh','passport_number' => 'BN1365456676745','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4', 'first_name' => 'Rajaul', 'last_name' => 'Karim', 'date_of_birth' => '1990-05-15','country_of_citizenship' => 'Bangladesh','country_of_residence' => 'Bangladesh','passport_number' => 'BN1365456676745','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '5', 'first_name' => 'Jobaer', 'last_name' => 'Alom', 'date_of_birth' => '1990-05-15','country_of_citizenship' => 'Bangladesh','country_of_residence' => 'Bangladesh','passport_number' => 'BN1365456676745','created_by' => '1','updated_by' => NULL,'deleted_at' => NULL,'created_at' => NULL,'updated_at' => NULL)
        ));
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
