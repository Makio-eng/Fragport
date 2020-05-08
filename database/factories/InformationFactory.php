<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Information;
use Faker\Generator as Faker;

$factory->define(Information::class, function (Faker $faker) {
  return [
    //
    'admin_id' => '1',
    'title' => $faker->realText(15),
    'body' => $faker->realText(50),
    'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
  ];
});
