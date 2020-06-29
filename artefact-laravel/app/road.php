<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $table='road';
    protected $primaryKey = 'bikeno';

    protected $fillable=['feature'];
    public function bikes()
    {
       return $this->belongsTo('App\Bike');
    }
    public function ebikes()
    {
       return $this->hasMany('App\Ebike');
    }

}
