<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**this disable the default timestamp behavior*/
    public $timestamps= false;
    protected $dateformat="d-m-y";
   // protected $fillable=[]
    protected $guarded=['id'];

    public function videoComments(){

        return hasMany('App\VideoComment');
    }

    public function courses(){

        return hasMany('App\Course');
    }

    public function Exames(){

        return hasMany('App\Exames');
    }

  
}
