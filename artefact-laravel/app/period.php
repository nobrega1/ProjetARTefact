<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table='period';

    protected $primaryKey = 'no';

    protected $fillable = ['editionno','date','start','end'];

    public function edition()
    {
       return $this->belongsTo('App\Edition','no');
   }
   public function tests()
   {
      return $this->hasMany('App\Test');
  }
  public function badge()
  {
    return $this->hasOne('App\Badge');
  }
}
