<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategorie extends Model
{
    //

    public $timestamps=false;
    public $table='course_categories';
    public $primarykey='type';
    public $icremeting=false;

    public function courses(){

    	return hasMany('App\Course', 'type_categorie', 'id');
    }

}
