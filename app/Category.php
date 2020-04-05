<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function Menu($value='')
  {
  return $this->hasMany('App\ModelsMenu');
  }
}
