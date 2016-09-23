<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCupom extends Model
{
    public $table='user_cupons';
    public $timestamps=false;
    protected $dateformat='d-m-y';
    public $guarded=['cupom_codigo', 'user_id', 'end_at'];
    public $primaryKey='cupom_codigo';
}
