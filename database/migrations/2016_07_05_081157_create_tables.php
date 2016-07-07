<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->string("name");
            $table->string("email");
            $table->string('password');
            $table->string('picture_url');
            $table->integer('type');

        });

        Schema:create("disciplina", function(Blueprint $table ){

            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('nivel');
            $table->string('picture_url');


        });

        Schema:create('user_disciplina_exame', function(Blueprint $table){

            $table->integer('id-user');
            $table->integer('id-disciplina');
            $table->timestamp('start_at');
            $table->timestamp('expire_at');
            $table->primary(array('id-user,id-disciplina');
            $table->foreign('id-user')->reference('id')->on('users');
            $table->foreign('id-disciplina')->reference('id')->on('disciplina');
            
        });

        Schema:create('exames', function(Blueprint $table){
            
            $table->increments('id');
            $table->primary('id');
            $table->integer('id-disciplina');
            $table->foreign('id-disciplina')->reference('id')->on('disciplina');
            $table->integer('year');
            $table->string('name');
            $table->text('description');
            $table->string('picture_url');

        });



        Schema:create('exame_material', function(Blueprint $table){

            $table->increments('id');
            $table->primary('id');
            $table->integer('id_exame');
            $table->foreign('id_exame')->reference('id')->on('exames');
            $table->string('name');
            $table->string('material_url');
            $table->text('description');


        });

        Schema:create('exame_video', function(Blueprint $table){

            $table->increments('id');
            $table->primary('id');
            $table->integer('id_exame');
            $table->foreign('id_exame')->reference('id')->on('exames')
            $table->string('duration');
            $table->string('video_url');

        });

        Schema:create('exame_comments', function(Blueprint $table){

             $table->increments('id');
             $table->primary('id');
             $table->integer('id_user');
             $table->integer('id_exame');
             $table->foreign('id_user')->reference('id')->on('users');
             $table->foreign('id_exame')->reference('id')->on('exames');
             $table->text('content');
             $table->timestamp('publish_at');
        });

        Schema:create('courses', function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('disciplina');
            $table->string('course_picture_url');

        });

        Schema:create('course_esplicador' function(Blueprint $table){

            $table->integer('id_course');
            $table->integer('id_user');
            $table->primary(array('id_course', 'id_user'));
            $table->foreign('id_course')->reference('id')->on('courses');
            $table->foreign('id_user')->reference('id')->on('users');


        });

        Schema:create('course_videos', function(Blueprint $table){

             $table->increments('id');
             $table->primary('id');
             $table->integer('id_course');
             $table->foreign('id_course')->reference('id')->on('courses');
             $table->string('nome');
             $table->string('duration');
             $table->string('videi_url');


        });

        Schema:create('users_course', function(Blueprint $table){

            $table->integer('cod_user');
            $table->integer('cod_curso');
            $table->primary(array('cod_user', 'cod_curso'));
            $table->foreign('cod_curso')->reference('id')->on('course');
            $table->foreign('cod_user')->reference('id')->on('users');
            $table->timestamp('start_at');
            $table->timestamp('end_at');


        });

        Schema:create('video_material', function(Blueprint $table){

            $table->integer('id_video');
            $table->increments('id');
            $table->primary('id');
            $table->foreign('id_video')->reference('id')->on('course_videos');
            $table->string('name');
            $table->string('material_url');



        });

        Schema:create('video_comments', function(Blueprint $table){

             $table->increments('id');
             $table->primary('id');
             $table->integer('id_user');
             $table->integer('id_video');
             $table->foreign('id_user')->reference('id')->on('users');
             $table->foreign('id_video')->reference('id')->on('course_videos');
             $table->text('description');
             $table->timestamp('created_at');



        });

        Schema:create('testimony', function(Blueprint $table){

            $table->integer('id_user');
            $table->primary('id_user');
            $table->foreign('id_user')->reference('id')->on('users');
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
        Schema::drop('tables');
    }
}
