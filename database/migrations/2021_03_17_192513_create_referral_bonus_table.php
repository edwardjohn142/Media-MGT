<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_bonus', function (Blueprint $table) {
            $table->integer('referral_bonus_id')->primary();
            $table->integer('referred_by');
            $table->integer('person_referred');
            $table->dateTime('start_date_of_person_referred');
            $table->dateTime('referral_bonus_date_of_payment');
            $table->integer('approved_by');
            $table->double('referral_bonus_amount');
            $table->integer('weekly_payment_id');
            $table->integer('payment_status');


            $table->foreign('referred_by')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('person_referred')->references('sales_rep_id')->on('sales_rep');
            $table->foreign('approved_by')->references('user_id')->on('users');
            $table->foreign('weekly_payment_id')->references('weekly_payment_id')->on('weekly_payment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_bonus');
    }
}
