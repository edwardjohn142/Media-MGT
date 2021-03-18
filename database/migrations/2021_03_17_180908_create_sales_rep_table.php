<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesRepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_rep', function (Blueprint $table) {
            $table->integer('sales_rep_id')->primary();
            $table->string('name',200);
            $table->integer('floor_id');
            $table->integer('team_leader_id')->constrained();

            $table->foreign('floor_id')->references('floor_id')->on('floor');

        });
        Schema::table('sales_rep', function (Blueprint $table) {
            $table->foreign('team_leader_id')->references('sales_rep_id')->on('sales_rep')->onUpdate('cascade')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_rep');
    }
}
