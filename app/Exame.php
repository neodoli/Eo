<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    //

    public $timestamps=false;
    protected $dateformat="d-m-y";

    public function subject(){

    	return $this->belongsTo('App\subject', 'id_subject', 'id');
    }

    public function categorie(){

    	return $this->belongsTo('App\ExameCategorie', 'type_categorie', 'type');
    }
}
