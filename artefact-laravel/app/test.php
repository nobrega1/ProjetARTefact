<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table='test';

    protected $primaryKey = 'no';

    protected $fillable = ['periodno','productno','clientno','start','end','commentstaff','stars','feedback'];
    public function period()
    {
       return $this->belongsTo('App\Period','no');
   }
   public function client()
   {
      return $this->belongsTo('App\Client','no');
  }
}
