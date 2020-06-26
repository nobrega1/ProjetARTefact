<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $table='catalogue';


    protected $fillable=['editionno','productno'];

    public function products()
    {
       return $this->hasMany('App\Product');
    }
    public function editions()
    {
       return $this->hasOne('App\Edition','no');
   }

}
