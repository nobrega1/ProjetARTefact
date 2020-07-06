<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';

    protected $primaryKey = 'no';

    protected $fillable = ['brandno','shortdescr','longdescr','distinctivesign','lienimage'];

    public function company()
    {           
       return $this->belongsTo('App\Company','no');
   }
   
   public function bookmarks()
   {
      return $this->belongsTo('App\Bookmarks');
  }
  public function editions()
  {
     return $this->belongsToMany('App\Edition','catalogue','editionno','productno');
 }
  
}
