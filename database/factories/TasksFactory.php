<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {

    return [
        'project_name' => $faker->randomDigitNotNull,
        'module_name' => $faker->word,
        'task_name' => $faker->word,
        'assign_to' => $faker->randomDigitNotNull,
        'task_status' => $faker->randomElement(]),
        'task_start' => $faker->word,
        'task_end' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
