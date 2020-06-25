<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='person';

    protected $primaryKey = 'no';

    protected $fillable = ['addressno','name','firstname','email','password','isactive','phonenumber'];

    public function address()
    {           
       return $this->belongsTo('App\Address','no');
   }
   
   public function staffs()
   {
      return $this->hasOne('App\Staff');
  }

}
