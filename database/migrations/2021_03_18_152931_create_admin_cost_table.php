<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_cost', function (Blueprint $table) {
            $table->integer('admin_cost_id')->primary();
            $table->string('type_of_expense',100);
            $table->dateTime('date_of_expense');
            $table->integer('amount');
            $table->string('description',200);
            $table->integer('approved_by');

            $table->foreign('approved_by')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_cost');
    }
}
