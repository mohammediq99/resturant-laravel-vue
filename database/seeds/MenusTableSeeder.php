<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


$category = factory(App\Category::class,5)->create();
$category->each(function($category){
  factory(App\ModelsMenu::class,3)->create();

});
    }
}
