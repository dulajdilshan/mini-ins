<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nic');
            $table->string('full_name');
            $table->string('gender');
            $table->boolean('married');
            $table->string('contact_no');
            $table->text('address_1');
            $table->text('address_2');
            $table->boolean('last_loan_settled');
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
        Schema::dropIfExists('guarantors');
    }
}
