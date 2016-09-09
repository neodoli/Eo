<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('course_categories', function(Blueprint $table){

            $table->increments('id');
            $table->integer('type', 2)->unsigned();
            $table->string('name', 100);
            $table->integer('price', 10)->unsigned();

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
        Schema::drop('course_categories');
    }
}
