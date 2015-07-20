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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => null,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $content = null;

    foreach ($faker->paragraphs(rand(1, 15)) as $paragraph) {
        if ((bool)rand(0, 1) && !is_null($content)) {
            $content = rtrim($content, "</p>\n") . ' ' . $paragraph . "</p>\n";
        } else {
            $content .= '<p>' . $paragraph . "</p>\n";
        }
    }

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'content' => $content,
        'thumbnail' => $faker->imageUrl(320, 240),
        'large' => $faker->imageUrl(900, 300),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
    ];
});
