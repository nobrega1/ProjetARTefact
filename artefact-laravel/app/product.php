<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';

    protected $primaryKey = 'no';

    protected $fillable = ['brandno','shortdescr','longdescr','distinctivesign','lienimage'];

    public function company()
    {           
       return $this->belongsTo('App\Company','no');
   }
   
   public function products()
   {
      return $this->hasMany('App\Products');
  }
}
