<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('campaign_id');
            $table->String('title')->default(false);
            $table->String('helper_text')->default(false);
            $table->integer('mobile')->default(1);
            $table->integer('best_number_ask')->default(false);
            $table->integer('best_number_required')->default(false);
            $table->integer('additional_info_ask')->default(false);
            $table->integer('additional_info_required')->default(false);
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
        Schema::dropIfExists('bookings');
    }
}
