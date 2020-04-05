<?php

namespace App\Http\Controllers;

use App\ModelsMenu;
use Illuminate\Http\Request;
use App\Category;
class ModelsMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restoId = [1];
        $menus = \App\ModelsMenu::whereIn('resto_id',$restoId)->get()->groupBy('category.name');
  
  
 
return response()->json($menus ,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       
   $this->validate($request ,[
            'item' => 'required',
            'description' => 'required|min:3',
            'price' => 'required',
            'category' => 'required',
            'resto' => 'required'
        ]);

$category = Category::where('name',$request->category)->where('resto_id',$request->resto)->first()->id;
 
$menu = ModelsMenu::create([
    'name' => $request->item,
    'description' => $request->description,
    'price' => $request->price,
    'category_id' => $category,
    'resto_id' => $request->resto
]);
 

return response()->json($menu ,201);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsMenu  $modelsMenu
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsMenu $modelsMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsMenu  $modelsMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsMenu $modelsMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsMenu  $modelsMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsMenu $modelsMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsMenu  $modelsMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsMenu $modelsMenu)
    {
        //
    }
}
