<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emtb extends Model
{
    protected $table='emtb';

    protected $primaryKey = 'mtbbikeno';

    protected $fillable = ['feature'];

    public function mtb()
    {           
       return $this->belongsTo('App\Mtb','bikeno');
   }
   
 
}
