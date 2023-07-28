<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::all()->first();
        if ( $user ) {
            Post::factory()->count(15)->for($user)->create()->each(function (Post $post) {
                $count = rand(0, 4);
                if ($count) {
                    $post->tags()->saveMany(Tag::all()->random($count));
                }
            });
        }
    }
}
