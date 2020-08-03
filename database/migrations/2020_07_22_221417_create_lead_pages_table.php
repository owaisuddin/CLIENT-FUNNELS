<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->nullable(false);
            $table->string('title')->nullable(true);
            $table->string('subheading')->nullable(true);
            $table->longText('training_start_text')->nullable(true);
            $table->longText('learn_title')->nullable(true);
            $table->longText('learn_list')->nullable(true);
            $table->longText('presenter_image')->nullable(true);
            $table->longText('presenter_title')->nullable(true);
            $table->longText('presenter_name')->nullable(true);
            $table->longText('presenter_text')->nullable(true);
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
        Schema::dropIfExists('lead_pages');
    }
}
