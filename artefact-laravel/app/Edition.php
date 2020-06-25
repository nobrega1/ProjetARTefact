<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $table='edition';

    protected $primaryKey = 'no';

    protected $fillable = ['eventno','place','start','end'];

    public function event()
    {
       return $this->belongsTo('App\Event','no');
   }
   public function periods()
   {
      return $this->hasMany('App\Period');
  }

}
