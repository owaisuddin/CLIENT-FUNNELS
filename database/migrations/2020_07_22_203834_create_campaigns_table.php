<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('note');
            $table->string('status')->default('active');
            $table->string('webinar_url');
            $table->string('booking_url');
            $table->integer('page_views')->default(0);
            $table->integer('registrations')->default(0);
            $table->integer('call_bookings')->default(0);
            $table->integer('call_closed')->default(0);
            $table->integer('user_id');
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
        Schema::dropIfExists('campaigns');
    }
}
