<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'no';

    protected $table='company';


    protected $fillable=['corporatename'];
    public function contacts()
    {
       return $this->hasMany('App\Contacts');
   }
   public function brands()
   {
      return $this->hasMany('App\Brands');
  }
 
}
