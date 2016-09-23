<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCupomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cupons', function (Blueprint $table) {
            $table->integer('cupom_codigo')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('end_at');
            $table->primary(['cupom_codigo', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_cupons');
    }
}
