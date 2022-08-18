<?php

use App\Couple;
use App\User;
use App\UserMetadata;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'id'         => $faker->uuid,
        'name'       => $name,
        'nickname'   => $name,
        'gender_id'  => rand(1, 2),
        'manager_id' => $faker->uuid,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'male', function (Faker $faker) {
    return ['gender_id' => 1];
});

$factory->state(User::class, 'female', function (Faker $faker) {
    return ['gender_id' => 2];
});

$factory->define(Couple::class, function (Faker $faker) {
    return [
        'id'         => $faker->uuid,
        'husband_id' => function () {
            return factory(User::class)->states('male')->create()->id;
        },
        'wife_id'    => function () {
            return factory(User::class)->states('female')->create()->id;
        },
        'manager_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});

$factory->define(UserMetadata::class, function (Faker $faker) {
    return [
        'id'      => $faker->uuid,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'key'     => $faker->name,
        'value'   => $faker->sentence,
    ];
});
