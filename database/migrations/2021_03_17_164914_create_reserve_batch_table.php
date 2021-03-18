<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_batch', function (Blueprint $table) {
            $table->integer('reserve_batch_id')->primary();
            $table->string('reserve_id',20);
            $table->double('released_amount');
            $table->integer('batch_number');
            $table->dateTime('released_date');
            $table->dateTime('collected_date');
            $table->integer('floor_id');
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
        Schema::dropIfExists('reserve_batch');
    }
}
