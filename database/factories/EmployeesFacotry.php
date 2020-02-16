<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Employee::class, function (Faker $faker) {
    return [
    	'emp_id' => $faker->uuid(),
        'name' => $faker->name(),
        'address' => $faker->address(),
        'dept' => 'NULL',
        'location' => $faker->address(),
        'isactive' => 1
    ];
});
