<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table='bookmark';
    protected $fillable=['clientno','productno'];

    public function clients()
    {
       return $this->hasOne('App\Client');
    }
    public function products()
    {
       return $this->hasMany('App\Product','no');
   }
}
