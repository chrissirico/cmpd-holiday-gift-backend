<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household', function (Blueprint $table) {
            $table->increments('id');

            /*
             * Users nominate a household with children
             */
            $table->integer('nominator_user_id')->unsigned();
            $table->foreign('nominator_user_id')->references('id')->on('users');

            $table->string('name_first');
            $table->string('name_middle');
            $table->string('name_last');

            $table->date('dob');

            $table->string('race');

            $table->string('gender');
            $table->string('email');

            $table->integer('last4ssn');

            $table->string('preferred_contact_method');

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

        Schema::drop('household');
    }
}
