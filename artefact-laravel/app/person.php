<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Person as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Person extends Authenticatable
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
  public function contact()
  {
    return $this->hasOne('App\Contact');
  }

}
