<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameSignup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_exames', function (Blueprint $table) {

            $table->increments('id');
            $table->string('confirmed')->default('no');
            $table->integer('id_user');
            $table->integer('id_subject');
            $table->integer('id_categorie');
            $table->integer('id_payments');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->foreign('id_user')->reference('id')->on('users');
            $table->foreign('id_subject')->reference('id')->on('subjects');
            $table->foreign('id_payments')->reference('id')->on('payments');
            $table->foreign('id_categorie')->reference('id')->on('exame_categories');


            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signup_exames');
    }
}
