<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    //

    public $table='course_videos';
    public $dateformat="d-m-y";
    public $timestamps= false;


    public function videoComments(){

    	return $this->hasMany('App\videoComment','id_video','id');

    }

    public function videoMaterials(){

    	return $this->hasMany('App\videoMaterial', 'id_video','id');
    }
}
