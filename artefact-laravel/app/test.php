<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table='test';

    protected $primaryKey = 'no';

    protected $fillable = ['periodno','productno','clientno','starttime','endtime','commentairestaff','stars','feedback'];

    public function period()
    {
       return $this->belongsTo('App\Period','no');
   }

    public function product()
    {
       return $this->belongsTo('App\Product','no');
   }

   public function client()
   {
      return $this->belongsTo('App\Client','no');
  }
}
