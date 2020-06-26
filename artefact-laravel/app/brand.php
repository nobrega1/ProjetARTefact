<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brand';

    protected $primaryKey = 'no';

    protected $fillable = ['companyno','name','shortdescr','longdescr'];

    public function products()
    {
       return $this->hasMany('App\Product');
   }
   public function company()
   {
      return $this->belongsTo('App\Company','no');
  }
}
