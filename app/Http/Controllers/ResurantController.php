<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resurant;
use Auth;
class ResurantController extends Controller
{



  public  function index( )
  {
      $restos = Auth::user()->restos()->get();
      return view('resto.resto-index', compact('restos'));
  }
   public function store(Request $req){
    $this->validate($req , [
        'name' => 'required|min:3',
        'address' => 'required',
        'tables' => 'required|integer'
    ]);

   $newResto = Auth::user()->restos()->create([
        'name' => $req->name,
        'location' => $req->address,
        'tables' => $req->tables,
      ]); 
    
    return response($newResto ,201);
   }
}
