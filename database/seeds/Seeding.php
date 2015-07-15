<?php

use Illuminate\Database\Seeder;

class Seeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counts = [
            'category' => rand(1, 5),
            'post' => rand(50, 100),
            'user' => rand(1, 5)
        ];

        factory('App\User', $counts['user'])->create();
        factory('App\Category', $counts['category'])->create();

        factory('App\Post', $counts['post'])->make()->each(function ($post) use ($counts) {
            /**
             * @var App\Post $post
             */

            $post->category_id = rand(1, $counts['category']);
            $post->author_id = rand(1, $counts['user']);
            $post->save();
        });
    }
}
