<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address' =>$faker->streetAddress,
        'city' =>$faker->city,
        'country_id' =>rand(1,140),
        'postal_code' =>$faker->postcode,
    ];
});
