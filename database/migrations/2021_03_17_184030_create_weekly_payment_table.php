<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_payment', function (Blueprint $table) {
            $table->integer('weekly_payment_id')->primary();
            $table->string('payment_summary_number',100);
            $table->integer('payee');
            $table->dateTime('week_of_sale');
            $table->dateTime('week_of_payment');
            $table->dateTime('date_of_payment');
            $table->integer('retention_fund_scheme_id');
            $table->double('payment_amount');
            $table->integer('payment_status');
            $table->string('notes',300);

            $table->foreign('payee')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('retention_fund_scheme_id')->references('retention_fund_scheme_id')->on('retention_fund_scheme');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly_payment');
    }
}
