<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = ['place','start','end'];
    protected $table='edition';

    public function event()
    {
       return $this->belongsTo('App\event');
   }
   protected $primaryKey = 'no';
}
