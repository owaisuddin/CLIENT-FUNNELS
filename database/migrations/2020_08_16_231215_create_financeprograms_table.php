<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceprogramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeprograms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('currency');
            $table->string('price');
            $table->string('recurring_payment');
            $table->string('recurring_every')->nullable(true);
            $table->string('recurring_tenure')->nullable(true);
            $table->string('contracts')->nullable(true);
            $table->string('notes')->nullable(true);
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
        Schema::dropIfExists('financeprograms');
    }
}
