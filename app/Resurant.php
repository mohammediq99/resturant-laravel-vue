<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resurant extends Model
{
    protected $guarded = [];
    protected $appends = ['slug' ,  'orderslug'];
   public function owner()
   {
       return $this->belongsTo('App\User', 'owner_id');
   }
   public function getSlugAttribute(){
       return route('restos.menu' ,$this->id);
   }
   public function getOrderslugAttribute()
   {
       return route('restos.order' , $this->id);
   }
   public function orders()
   {
       return $this->hasMany('App\Order', 'resto_id');
   }
}
