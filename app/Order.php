<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
    protected $guarded = [];
    protected $casts = [
        'order_details' => 'array'
    ];
    public function resto()
    {
        return $this->belongsTo('App\Resurant', 'resto_id');
    }
}
