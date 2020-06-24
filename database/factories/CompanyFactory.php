<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use App\Models\Group;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'group_id' => Group::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'company' => $faker->company,
        'cnpj' => $faker->cnpj(false),
        'ie' => '',
    ];
});
