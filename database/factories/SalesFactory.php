<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'ProductId' => rand(1,100),
        'Total_sales'=>rand(22,850),
    ];
});
