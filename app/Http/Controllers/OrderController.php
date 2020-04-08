<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resurant;
use App\Order;
class OrderController extends Controller
{
    public function index($id)
    {
        $resto = Resurant::findOrFail($id);

        if(!$resto){
            abort (404, 'the Resturant is no longer here');
        }
        $orders = Order::where('resto_id' , $id)->paginate(20);
    
        return view('orders.order-index')
        ->with('orders' , $orders)
        ->with('resto' , $resto);
    }
    public function add($id)
    {
        $resto = Resurant::findOrFail($id);
        if(!$resto){
            abort (404, 'the Resturant is no longer here');
        }

        return view('orders.order-add')->with('resto' , $resto);

    }
}
 