<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'birth_date'=> $faker->date,
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
