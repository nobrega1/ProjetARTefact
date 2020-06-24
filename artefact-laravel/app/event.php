<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable=['name'];

    public function editions()
     {
        return $this->hasMany('App\Edition');
    }
}
