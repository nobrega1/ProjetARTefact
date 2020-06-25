<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='job';


    public function edition()
    {
       return $this->belongsTo('App\Edition','no');
   }
   public function staff()
   {
      return $this->hasOne('App\staff','no');
  }
}
