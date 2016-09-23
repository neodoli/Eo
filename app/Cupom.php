<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    public $table='cupom';
    public $timestamps=false;
    protected $dateformat='d-m-y';
    public $guarded=['days', 'codigo'];
    public $primaryKey='codigo';

}
