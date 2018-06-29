<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_number');
            $table->unsignedInteger('customer_id');
            $table->bigInteger('loan_amount');
            $table->bigInteger('net_amount');
            $table->unsignedInteger('rate');
            $table->unsignedInteger('weeks');
            $table->unsignedInteger('remaining_weeks');
            $table->unsignedInteger('weekly_installment');
            $table->bigInteger('balance');
            $table->unsignedInteger('guarantor_id');
            $table->dateTime('obtained_date');
            $table->dateTime('end_date');
            $table->boolean('done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
