<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='person';

    protected $primaryKey = 'no';
    protected $guarded = 'no';

    protected $fillable = ['addressno','name','firstname','email','password','isactive','phonenumber'];
    
    protected $hidden = [
      'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
      return $this->password;
    }


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
