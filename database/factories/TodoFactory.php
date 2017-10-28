<?php

use App\Todo;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Todo::class, function (Faker $faker) {
    return [
        
        'todo' => $faker->sentence(10)// 10 zborovi za todo kolonata od todos tabelata
    ];
});
