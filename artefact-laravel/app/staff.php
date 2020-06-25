<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staff';

    protected $primaryKey = 'no';

    protected $fillable = ['personno'];

    public function persons()
    {
       return $this->hasOne('App\Person','no');
   }

   public function job()
   {
      return $this->hasOne('App\job','no');
  }

}
