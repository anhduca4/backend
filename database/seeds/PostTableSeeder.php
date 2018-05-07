<?php

use Illuminate\Database\Seeder;
use App\Models\Post\Post;
use Faker\Generator;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for($i = 0 ; $i <= 200; $i++){
            $title = $faker->sentence;
            $content = $faker->paragraph;
            $news = [
                'user_id' => 1,
                'type' => Post::TYPE_NEWS,
                'title_slug' => str_slug($title, '-'),
                'image_intro' => '',
                'description' => str_limit($content, 100),
                'title' => $title,
                'content' => $content,
            ];
            Post::insert($news);
        }
        for($i = 0 ; $i <= 10; $i++){
            $title = $faker->sentence;
            $content = $faker->paragraph;
            $news = [
                'user_id' => 1,
                'type' => Post::TYPE_NEWS,
                'title_slug' => str_slug($title, '-'),
                'image_intro' => '',
                'description' => str_limit($content, 100),
                'title' => $title,
                'content' => $content,
                'localtion' => 'Hanoi',
            ];
            Post::insert($news);
        }
    }
}