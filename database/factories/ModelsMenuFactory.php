<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelsMenu;
use Faker\Generator as Faker;

$factory->define(ModelsMenu::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraphs(2,true),
        'price' => $faker->numberBetween(99,999),
        'resto_id' => 1,
      'category_id' =>  $faker->numberBetween(1,5)

    ];
});
