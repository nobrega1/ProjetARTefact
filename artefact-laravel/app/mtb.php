<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mtb extends Model
{
    protected $table='mtb';

    protected $primaryKey = 'bikeno';

    protected $fillable = ['feature'];

    public function bike()
    {           
       return $this->belongsTo('App\bike','no');
   }
   
   public function emtbs()
   {
      return $this->hasMany('App\Emtb');
  }
}
