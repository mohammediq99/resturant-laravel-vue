<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsMenu extends Model
{
  protected $with = ['category'];
  protected $fillable = [
    'name' , 'description' , 'price' , 'resto_id' , 'category_id'
  ];
    public function category()
    {
      return $this->belongsTo('App\Category','category_id');
    }
    public function resto()
    {
        return $this->belongsTo('App\resurant', 'resto_id');
    }
}
