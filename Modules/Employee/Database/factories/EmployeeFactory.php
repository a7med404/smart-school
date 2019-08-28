<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'full_name' => 'name',
        'username'  => 'smartadmin',
        'password'  => Hash::make('smartschool'),
        'created_at'=> new DateTime(), 
        'updated_at'=> new DateTime()
    ];
});
