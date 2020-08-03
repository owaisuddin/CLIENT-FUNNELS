<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebinarBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->string('name');
            $table->string('email');
            $table->string('country_code');
            $table->string('mobile');
            $table->string('call_slot');
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
        //
    }
}
