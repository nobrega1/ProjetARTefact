<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';

    protected $primaryKey = 'no';

    protected $fillable = ['brandno','shortdescr','longdescr','distinctivesign','lienimage'];

    public function brand()
    {           
       return $this->belongsTo('App\Brand','brandno','no');
   }
   
   public function bookmarks()
   {
      return $this->belongsTo('App\Bookmarks');
  }
  public function editions()
  {
     return $this->belongsToMany('App\Edition','catalogue','editionno','productno');
 }
 public function tests()
 {
    return $this->hasMany('App\Test','no');
}

}
