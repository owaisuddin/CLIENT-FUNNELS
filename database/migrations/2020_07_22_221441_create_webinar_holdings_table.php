<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_holdings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campaign_id')->nullable(false);
            $table->string('title')->nullable(true);
            $table->string('subheading')->nullable(true);
            $table->string('schedule_text')->nullable(true);
            $table->string('event_begin_text')->nullable(true);
            $table->string('video')->nullable(true);
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
        Schema::dropIfExists('webinar_holdings');
    }
}
