<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'no';

    protected $table='contact';


    protected $fillable=['companyno','personno','since','until'];

    public function companies()
    {
       return $this->hasMany('App\Company');
    }
    public function person()
    {
      return $this->hasOne('App\Person');
    }
}
