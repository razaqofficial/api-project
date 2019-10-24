<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' =>  $faker->numberBetween(1000,4000),
        'quantity' => $faker->randomElement([1,2,4,5,9]),
        'description' => $faker->sentence(5)
    ];
});
