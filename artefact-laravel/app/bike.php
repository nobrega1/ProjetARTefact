<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table='bike';

    protected $primaryKey = 'no';

    protected $fillable = ['productno','frameunit','framesize','rimsize','rimunit'];

    public function mtbs()
    {
       return $this->hasMany('App\Mtb');
   }
   public function gravels()
   {
      return $this->hasMany('App\Gravel');
  }
  public function roads()
  {
     return $this->hasMany('App\Road');
 }
   public function product()
   {
      return $this->belongsTo('App\Product','no');
  }
}
