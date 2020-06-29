<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $table='badge';

    protected $primaryKey = 'no';

    protected $fillable = ['periodno','clientno'];

    public function period()
    {
       return $this->hasOne('App\Period');
   }
    public function client()
    {
      return $this->hasOne('App\Client');
    }
}
