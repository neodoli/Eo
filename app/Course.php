<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\CourseVideo;

class Course extends Model
{
    //

    public  $timestamps=false;
    protected $dataformat='d-m-y';

    public function courseVideos(){

    	return $this->hasMany('App\CourseVideo','id_course', 'id');
    }
}
