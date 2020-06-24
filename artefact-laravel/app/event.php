<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public function editions()
     {
        return $this->hasMany('App\Edition');
    }
}
