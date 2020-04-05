<?php

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
        \App\User::create([
          'name'=> 'Mohammad Amer',
          'email' =>'mmhhddmm853@gmail.com',
          'password' => bcrypt('mmhhddmm853@gmail.com')

        ]);
    }
}
