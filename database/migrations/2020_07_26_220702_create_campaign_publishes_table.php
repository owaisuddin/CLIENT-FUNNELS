<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignPublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_publishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->string('campaign_name');
            $table->string('campaign_status')->default(true);
            $table->longText('campaign_notes')->nullable(true);
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
        Schema::dropIfExists('campaign_publishes');
    }
}
