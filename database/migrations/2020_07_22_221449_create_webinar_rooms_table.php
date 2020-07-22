<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->integer('webinar_popup')->default(1);
            $table->integer('minutes')->default(0);
            $table->integer('seconds')->default(0);
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
        Schema::dropIfExists('webinar_rooms');
    }
}
