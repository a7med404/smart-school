<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'first_name'       => $faker->firstName(10),
        'last_name'        => $faker->lastName(10),
        'phone_number'     => $faker->e164PhoneNumber(),
        'gender'           => 0,
        'last_seen'        => now(),
    ];
});
