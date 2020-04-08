<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get/menu' , function(){
  $categoey = \App\ModelsMenu::findOrFail(1);
  dd($categoey->Category);


});
Route::group(['middleware' => 'auth'], function () {
    

//Route::get('/items','ModelsMenuController@index');
Route::get('/restos', 'ResurantController@index')->name('restos');
Route::get('/restos/menu/{id}' , 'ModelsMenuController@index' )->name('restos.menu');
Route::get('/restos/order/{id}' , 'OrderController@index' )->name('restos.order');
Route::get('/restos/order/{id}/add' , 'OrderController@add' )->name('restos.order.add');

});