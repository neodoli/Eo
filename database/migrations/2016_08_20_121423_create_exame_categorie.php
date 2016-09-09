<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('exame_categories', function(Blueprint $table){

            $table->increments('id');
            $table->text('name');
            $table->integer('type');
            $table->primary('id');
            $table->unique('type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exame_categories');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('exame_categories', function(Blueprint $table){

            $table->increments('id');
            $table->text('name');
            $table->integer('type');
            $table->primary('id');
            $table->unique('type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exame_categories');
    }
}

