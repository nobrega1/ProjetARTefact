<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebike extends Model
{
    protected $table='ebike';

    protected $primaryKey = 'roadbikeno';

    protected $fillable = ['feature'];

    public function road()
    {           
       return $this->belongsTo('App\road','bikeno');
   }
   
 
}
