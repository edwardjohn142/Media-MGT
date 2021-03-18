<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleCotractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_cotract', function (Blueprint $table) {
            $table->integer('sale_cotract_id')->primary();
            $table->integer('sale_id');
            $table->integer('contract_id');

            $table->foreign('contract_id')->references('contract_id')->on('contract');
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
        Schema::dropIfExists('sale_cotract');
    }
}
