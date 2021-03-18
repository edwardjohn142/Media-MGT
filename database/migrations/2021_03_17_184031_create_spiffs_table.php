<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpiffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiffs', function (Blueprint $table) {
            $table->integer('spiffs_id')->primary();
            $table->integer('payee');
            $table->dateTime('spiffs_date_of_payment');
            $table->double('spiffs_amount');
            $table->integer('approved_by');
            $table->integer('weekly_payment_id');
            $table->string('name',100);
            $table->integer('payment_status');
            $table->string('notes',300);

            $table->foreign('payee')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('approved_by')->references('user_id')->on('users');
            $table->foreign('weekly_payment_id')->references('weekly_payment_id')->on('weekly_payment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spiffs');
    }
}
