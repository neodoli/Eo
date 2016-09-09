<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserCourse extends Model
{
    //

    protected $table = 'users_course';
    /**this disable the default timestamp behavior*/
    public $timestamps= false;
    protected $dateformat="d-m-y";
   // protected $fillable=[]
    protected $guarded=['id'];


    public function payment(){

    	return $this->belongsTo('App\payment','id_payments', 'id');
    }

    public function course(){

        return $this->belongsTo('App\Course', 'id_course', 'id');
    }



    /*-----------------------------------------------------------------------
    |    at this area of the model we will define the acessor and mutator 
    |   of our model.
    |________________________________________________________________________
    */

    public function getEndAtAttribute($value){

        $date= new Carbon($value);
        return $date->toFormattedDateString();  
    }
}
