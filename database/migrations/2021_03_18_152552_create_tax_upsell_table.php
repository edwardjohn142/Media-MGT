<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxUpsellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_upsell', function (Blueprint $table) {
            $table->integer('tax_upsell_id')->primary();
            $table->integer('sale_id');
            $table->integer('tax_sale_floor');
            $table->dateTime('date_of_tax_upsell');
            $table->double('amount_of_tax_upsell');
            $table->string('tax_sale_product',50);

            $table->foreign('sale_id')->references('sale_id')->on('sale');
            $table->foreign('tax_sale_floor')->references('floor_id')->on('floor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_upsell');
    }
}
