<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactForm;
use Faker\Generator as Faker;

$factory->define(ContactForm::class, function (Faker $faker) {
  return [
    //
    'name' => $faker->name,
    'email' => $faker->unique()->email,
    'body' => $faker->realText(50),
    'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),

  ];
});
