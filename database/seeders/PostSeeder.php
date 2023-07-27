<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory()->count(50)->create()->each(function (Post $post) {
            $count = rand(0, 4);
            if ($count) {
                $post->tags()->saveMany(Tag::all()->random($count));
            }
        });
    }
}
