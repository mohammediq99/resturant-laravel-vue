<?php
use App\Order;
use Illuminate\Database\Seeder;
class UsersTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $user =  \App\User::create([
          'name'=> 'Mohammad Amer',
          'email' =>'mmhhddmm853@gmail.com',
          'password' => bcrypt('mmhhddmm853@gmail.com')

        ]);
        $user->restos()->create([
          'name' => 'Baraka',
          'location' => 'Baghdad /62'
        ]); 
         $user->restos()->create([
          'name' => 'Saj Al reaf',
          'location' => 'Baghdad /62'
        ]); 
         $user->restos()->create([
          'name' => 'Jabar',
          'location' => 'Baghdad /62'
        ]);
        factory(Order::class, 40)->create();


    }
}
