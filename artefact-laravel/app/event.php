<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['name'];
    protected $table='event';


    public function editions()
     {
        return $this->hasMany('App\Edition');
    }
    protected $primaryKey = 'no';

}
