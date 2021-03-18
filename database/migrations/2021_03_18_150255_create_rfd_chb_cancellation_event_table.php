<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfdChbCancellationEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfd_chb_cancellation_event', function (Blueprint $table) {
            $table->integer('event_id')->primary();
            $table->integer('sale_id');
            $table->integer('chargeback_type');
            $table->dateTime('date');
            $table->double('amount');
            $table->double('fee');
            $table->string('note',255);
            $table->integer('event_type');

            $table->foreign('sale_id')->references('sale_id')->on('sale');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfd_chb_cancellation_event');
    }
}
