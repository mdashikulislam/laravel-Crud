<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'desc'=>$faker->name,
        'institution'=>$faker->name,
        'fstudy'=>$faker->name,
        'numofsch'=>$faker->randomDigit,
        'target'=>$faker->name,
        'value'=>$faker->paragraph,
        'eligibility'=>$faker->paragraph,
        'instructions'=>$faker->paragraph,
        'website'=>$faker->url

    ];
});
