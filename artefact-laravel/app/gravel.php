<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gravel extends Model
{
    protected $table='gravel';

    protected $primaryKey = 'bikeno';

    protected $fillable = ['feature'];

    public function bike()
    {           
       return $this->belongsTo('App\bike','no');
   }
   
 
}
