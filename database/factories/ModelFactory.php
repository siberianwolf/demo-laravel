<?php

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

/**
 * @var Illuminate\Database\Eloquent\Factory $factory
 */

$factory->define(App\User::class, function ($faker) {
    /**
     * @var Faker\Generator $faker
     */
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => null,
    ];
});

$factory->define(App\Post::class, function ($faker) {
    /**
     * @var Faker\Generator $faker
     */
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'content' => $faker->text(rand(100, 500)),
        'image' => $faker->imageUrl(320, 240)
    ];
});

$factory->define(App\Category::class, function ($faker) {
    /**
     * @var Faker\Generator $faker
     */
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
    ];
});
