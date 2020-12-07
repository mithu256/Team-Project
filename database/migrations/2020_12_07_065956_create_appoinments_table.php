<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->String('App_No');
            $table->String('Pat_id');
            $table->String('Doctor_ID');
            $table->String('Doctor_Name');
            $table->date('Booked_Date');
            $table->time('Booked_time');
            $table->foreign('Doctor_ID')->references('Doctor_ID')->on('doctors');
            $table->foreign('Pat_id')->references('Pat_id')->on('patients');
            $table->primary('App_No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appoinments');
    }
}
