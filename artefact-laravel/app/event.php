<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'no';

    protected $table='event';


    protected $fillable=['name'];



    public function editions()
     {
        return $this->hasMany('App\Edition');
    }

}
