<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboundNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbound_number', function (Blueprint $table) {
            $table->integer('inbound_number_id')->primary();
            $table->string('inbound_number',50);
            $table->integer('floor_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            $table->foreign('floor_id')->references('floor_id')->on('floor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inbound_number');
    }
}
