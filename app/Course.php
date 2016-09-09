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

    public function courseCategorie(){

    	return $this->belongsTo('App\CourseCategorie','type_categorie', 'type');
    }

    public function subject(){

    	return $this->belongsTo('App\Subject', 'id_subject', 'id');
    }
}
