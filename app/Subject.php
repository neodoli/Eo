<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
	public $table="subjects";
    public $timestamps=false;
    protected $dateformat="d-m-y";


    public function courses(){

    	return $this->hasMany('App\Course','id_subject','id');
    }

     public function exames(){

    	return $this->hasMany('App\Exame','Exame','id');
    }
}
