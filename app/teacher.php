<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    public $table='teachers';
    public $timestamps=false;
    protected $dataformat='d-m-y';

}
