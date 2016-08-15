<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    //

    public $table="video_comments";
    public $dateformat="d-m-y";
    public $timestamps= false;

    public function user(){

    	return $this->belongsTo('App\User', 'id_user');
    }

}
