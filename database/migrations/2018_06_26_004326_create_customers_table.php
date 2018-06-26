<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nic')->unique();
            $table->string('fullname');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_prefix');
            $table->dateTime('birthday');
            $table->unsignedInteger('age');
            $table->string('gender');
            $table->boolean('married');
            $table->string('contact_no1');
            $table->string('contact_no2');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('g5_division');
            $table->string('center_code');
            $table->string('center_name');
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
        Schema::dropIfExists('customers');
    }
}
