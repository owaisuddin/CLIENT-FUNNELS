<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('campaign_id');
            $table->integer('display_rapport_page')->default(1);
            $table->string('indoctrination_option')->default('page');
            $table->string('external_link')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('subheading')->nullable(false);
            $table->string('page_text')->nullable(false);
            $table->string('video')->nullable(false);
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
        Schema::dropIfExists('rapports');
    }
}
