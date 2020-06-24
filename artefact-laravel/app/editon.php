<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editon extends Model
{
    protected $fillable = ['place','start','end'];

    public function event()
    {
       return $this->belongsTo('App\event');
   }
   protected $primaryKey = 'no';
}
