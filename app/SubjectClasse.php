<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectClasse extends Model
{
    //

    public $table='subject_classes';
    public $dateformat='dd-mm-yy';
    public $timestamps=false;


    public function subject(){

    	return $this->belongTo('App\Subject', 'id_subject','id');
    }
}
