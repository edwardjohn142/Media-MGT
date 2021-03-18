<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetentionFundSchemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retention_fund_scheme', function (Blueprint $table) {
            $table->integer('retention_fund_scheme_id')->primary();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('percentage_applied_to',50);
            $table->double('retention_percentage');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retention_fund_scheme');
    }
}
