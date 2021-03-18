<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->integer('transaction_id')->primary();
            $table->integer('customer_id');
            $table->string('transaction_type',50);
            $table->integer('inbound_number');
            $table->dateTime('original_lead_date');
            $table->integer('original_lead_offer');
            $table->integer('merchant_id');
            $table->integer('transaction_amount');
            $table->timestamps();//date
            $table->integer('rebill_cycle');
            $table->dateTime('amount_capture_date');
            $table->integer('reserve_batch_id');
            $table->string('payment_method',50);
            $table->double('transaction_state');
            $table->integer('txid');
            $table->integer('product_id');

            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('merchant_id')->references('merchant_id')->on('merchant');
            $table->foreign('reserve_batch_id')->references('reserve_batch_id')->on('reserve_batch');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
