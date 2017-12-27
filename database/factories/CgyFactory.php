<?php

use Faker\Generator as Faker;
use App\Cgys;
$factory->define(Cgys::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'desc' => $faker->title,
        'enable' => $faker->boolean,
        'created_at' => Carbon\Carbon::now()->addDays(rand(0,10)),
        'updated_at' => Carbon\Carbon::now()->addDays(rand(0,10))
    ];
});
