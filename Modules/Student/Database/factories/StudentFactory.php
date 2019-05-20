<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'                  => $faker->fullName(15),  
        'religion'              => $faker->numberBetween(1,10),  
        'gender'                => $faker->numberBetween(1,10),  
        'is_staff_son'          => $faker->boolean(),  
        'identifcation_number'  => $faker->nationalIdNumber,  
        'identifcation_expire'  => $faker->dateTime(15),  
        'birthday'              => $faker->dateTime(15),  
        'start_data'            => $faker->dateTime(15), 
        'start_from'            => $faker->dateTime(15),
        'start_year'            => $faker->year(15), 
        'note'                  => $faker->sentence(150),
        'student_parent_id'     => $faker->numberBetween(1,10),
        'address_id'            => $faker->numberBetween(1,10),
        'contact_id'            => $faker->numberBetween(1,10),
        'level_id'              => $faker->numberBetween(1,10),
        'classroom_id'          => $faker->numberBetween(1,10),
        'part_id'               => $faker->numberBetween(1,10),
    ];
});
