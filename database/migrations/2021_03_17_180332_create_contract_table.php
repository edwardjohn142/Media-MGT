<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->integer('contract_id')->primary();
            $table->double('amount');
            $table->integer('signed');
            $table->string('name',200);
            $table->dateTime('effective_date');
            $table->string('company_name',200);
            $table->string('contract_file',200);
            $table->integer('customer_id');

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
        Schema::dropIfExists('contract');
    }
}
