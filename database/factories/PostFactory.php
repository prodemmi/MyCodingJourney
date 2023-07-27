<?php

namespace Database\Factories;

use App\Services\PostService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class PostFactory extends Factory
{
    public PostService $postService;

    public function definition(): array
    {
        $title = $this->faker->unique()->jobTitle();
        $this->postService = app()->make(PostService::class);

        return [
            'title' => $title,
            'summary' => $this->faker->realText(30),
            'content' => $this->faker->realText(),
            'cover' => 'https://sokanacademy.s3.ir-thr-at1.arvanstorage.ir/25306/conversions/Programming-competitions-small.webp',
            'slug' => Str::slug($title),
            'short_link' => $this->postService->generateShortLink(),
            'views' => $this->faker->numberBetween(0, 1000000),
        ];
    }
}
