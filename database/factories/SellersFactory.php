<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Name'=>$faker->word,
        'Email'=>$faker->word,
        'Product_type'=>$faker->word,
        'Total_sales'=>rand(22,850),
    ];
});
