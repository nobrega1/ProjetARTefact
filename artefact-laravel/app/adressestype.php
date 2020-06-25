<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adressestype extends Model
{
    protected $table='adressestype';

    protected $primaryKey = 'no';

    protected $fillable = ['addressno','description'];

    public function adresses()
    {
       return $this->hasMany('App\Address','no');
   }

}
