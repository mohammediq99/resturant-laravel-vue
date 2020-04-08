<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $restoId = 1;
      $menus = \App\ModelsMenu::where('resto_id',$restoId)->get()->groupBy('category.name');

      $restos =  Auth::user()->restos()->get();
   
        return view('home', compact('menus' ,'restoId' ,'restos' ));
    }
}
