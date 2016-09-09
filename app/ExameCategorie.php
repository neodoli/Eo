<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExameCategorie extends Model
{
    //
    public $table='exame_categories';
    public $timestamps=false;
    public $primarykey='type';
    public $incrementing=false;



    public function exames(){

    	return hasMany('App\Exames', 'type_categorie', 'id');
    }
}
