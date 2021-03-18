<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale', function (Blueprint $table) {
            $table->integer('sale_id')->primary();
            $table->string('sales_contact_link',200);
            $table->string('sales_report_link',200);
            $table->dateTime('date_of_payable_commission');
            $table->integer('sales_manager');
            $table->integer('senior');
            $table->integer('junior');
            $table->dateTime('sale_date');
            $table->integer('status');
            $table->integer('fulfilled_by');
            $table->integer('floor_id');
            $table->integer('customer_id');
            $table->integer('upsell');
            $table->dateTime('date_sent_to_next_floor');


            $table->foreign('sales_manager')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('senior')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('junior')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('fulfilled_by')->references('floor_id')->on('floor');
            $table->foreign('floor_id')->references('floor_id')->on('floor');
            $table->foreign('customer_id')->references('customer_id')->on('customer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale');
    }
}
