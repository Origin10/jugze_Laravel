<?php

use Faker\Generator as Faker;

$factory->define(\App\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'sub_title' => $faker->company,
        'content' => $faker->address,
        'page_view' => rand(0,1000),
        'is_feature' => false,
        'created_at' => Carbon\Carbon::now()->addDays(rand(0,10))
    ];
});
