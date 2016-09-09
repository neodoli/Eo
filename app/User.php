<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class User extends Model implements Authenticatable 
{
    use AuthenticableTrait;

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



/*

    public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}

public function getAuthIdentifier(){

    return 'remember_token';
}

  
public function getAuthPassword(){

    return 'remember_token';
}


  */
}
