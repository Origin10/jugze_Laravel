<?php

use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'pwd'=>$faker->password(6),
        'fb_id'=>$faker->sentence,
        'email'=>$faker->email,
        'nickname'=>$faker->name,
        'is_comment_public'=>$faker->boolean,
        'groups'=>$faker->name
    ];
});
