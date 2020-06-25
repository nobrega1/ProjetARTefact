<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model

{
    protected $primaryKey = 'no';

    protected $table='client';


    protected $fillable=['personno'];
    public function tests()
    {
       return $this->hasMany('App\Test');
   }
   public function person()
   {
      return $this->belongsTo('App\person','no');
  }
}
