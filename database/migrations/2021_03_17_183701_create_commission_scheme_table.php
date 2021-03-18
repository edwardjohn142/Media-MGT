<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionSchemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_scheme', function (Blueprint $table) {
            $table->integer('commission_scheme_id')->primary();
            $table->integer('sales_rep_id');
            $table->integer('no_sales_reps_involved');
            $table->integer('role_id');
            $table->double('commission_rate');
            $table->integer('sale_type');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('commission_type');
            $table->double('override_rate');
            $table->integer('first_sale_floor');
            $table->integer('customer_original_offer');

            $table->foreign('sales_rep_id')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('role_id')->references('role_id')->on('role');
            $table->foreign('first_sale_floor')->references('floor_id')->on('floor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commission_scheme');
    }
}
