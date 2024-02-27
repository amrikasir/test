<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\barang;
use Faker\Generator as Faker;

$factory->define(barang::class, function (Faker $faker) {
    return [
        'kode'          => $faker->unique()->numerify('BRC-####'), 
        'lokasi'        => $faker->numerify('G#-R##'), 
        'satuan'        => collect(['BOX', 'PCS', 'PAK', 'HELAI', 'UNIT'])->random(), 
        'stok'          => $faker->randomNumber(2, false)
    ];
});
