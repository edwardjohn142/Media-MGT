<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleSalesRepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_sales_rep', function (Blueprint $table) {
            $table->integer('title_sales_rep_id')->primary();
            $table->integer('title_id');
            $table->integer('sales_rep_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            $table->foreign('title_id')->references('title_id')->on('title');
            $table->foreign('sales_rep_id')->references('sales_rep_id')->on('sales_rep');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title_sales_rep');
    }
}
