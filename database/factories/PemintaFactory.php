<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\peminta;
use Faker\Generator as Faker;

$factory->define(peminta::class, function (Faker $faker) {
    return [
        'nik'       => $faker->nik(),
        'nama'      => $faker->name(),
        'depart'    => $faker->jobTitle()
    ];
});
