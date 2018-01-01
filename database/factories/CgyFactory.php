<?php

use Faker\Generator as Faker;
use App\Cgy;
$factory->define(Cgy::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'desc' => $faker->name,
        'enabled' => $faker->boolean,
        'created_at' => Carbon\Carbon::now()->addDays(rand(0,10)),
        'updated_at' => Carbon\Carbon::now()->addDays(rand(4,10)),
        'opened_at'=> Carbon\Carbon::now()->addDays(rand(5,10))

        //

//title=博士&desc=教授&enabled=0&opened_at=2018-01-02％2020:50:02

    ];
});
