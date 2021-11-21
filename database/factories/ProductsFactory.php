<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'Product_type'=> $faker->word,
        'Product_name'=> $faker->word,
        'Product_stock'=>rand(2,250),
        'Product_description'=>$faker->word,
        'Price'=>rand(22,850),
    ];
});
