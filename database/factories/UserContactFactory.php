<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\UserContact;
use Faker\Generator as Faker;

$factory->define(UserContact::class, function (Faker $faker) {
    return [
        'user_id' => User::unique()->first()->id,
        'address' => $faker->address,
        'number' => $faker->buildingNumber,
        'district' => $faker->district,
        'postalcode' => $faker->postcode,
        'complement' => '',
        'city' => $faker->city,
        'state' => $faker->state,
        'phone' => $faker->boolean(rand(0, 100)) ? $faker->landlineNumber(false) : null,
        'cell' => $faker->boolean(rand(0, 100)) ? $faker->cellphoneNumber(false) : null,
    ];
});
