<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class payment extends Model
{
    //

    protected $table = 'payments';
    /**this disable the default timestamp behavior*/
    public $timestamps= false;
    protected $dateformat="d-m-y";
   // protected $fillable=[]
    protected $guarded=['id'];

     public function signup(){

    	return $this->belongsTo('App\UserCourse','id_payments', 'id');
    }

    public function getDateAttribute($values){
        $date= new Carbon($values);
        return $date->toFormattedDateString();  

    }


}
