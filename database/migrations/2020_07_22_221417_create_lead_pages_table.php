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
            $table->string('training_start_text')->nullable(true);
            $table->string('learn_title')->nullable(true);
            $table->string('learn_list_1')->nullable(true);
            $table->string('learn_list_2')->nullable(true);
            $table->string('learn_list_3')->nullable(true);
            $table->string('learn_list_4')->nullable(true);
            $table->string('learn_list_5')->nullable(true);
            $table->string('presenter_image')->nullable(true);
            $table->string('presenter_title')->nullable(true);
            $table->string('presenter_name')->nullable(true);
            $table->string('presenter_text')->nullable(true);
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
