<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='address';

    protected $primaryKey = 'no';

    protected $fillable = ['street','streetnumber','pobox','postalcode','city','canton','country'];

    public function persons()
    {
       return $this->hasMany('App\Person','no');
   }

}
