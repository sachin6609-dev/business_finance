<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
        'emp_name' => $faker->word,
        'emp_mobile' => $faker->word,
        'emp_personal_email' => $faker->word,
        'emp_company_email' => $faker->word,
        'emp_role' => $faker->word,
        'emp_bankAccount' => $faker->word,
        'emp_assigned_project' => $faker->randomDigitNotNull,
        'emp_joinDate' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
