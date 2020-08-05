<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebinarRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->string('first_name');
            $table->string('email');
            $table->string('stage')->default('');
            $table->string('webinar_watched');
            $table->string('booked_call');
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
