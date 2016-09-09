<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

       
       


        Schema::create('testimony', function(Blueprint $table){

            $table->integer('id_user');
            $table->primary('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('testimony');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('testimony');
    }
}
