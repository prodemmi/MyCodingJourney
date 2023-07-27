<?php

namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository implements IPostRepository
{
    public function list(array $filters): LengthAwarePaginator
    {
        return $this->filtered($filters)->paginate(10);
    }

    public function recent(): Collection|null
    {
        return Post::latest()->take(3)->get();
    }

    public function findByShortLink(string $shortLink)
    {
        return Post::whereShortLink($shortLink)->firstOrFail();
    }

    public function findBySlug(string $slug)
    {
        return Post::whereSlug($slug)->firstOrFail();
    }

    private function filtered(array $filters)
    {
        $post = Post::query();
        $tag = data_get($filters, 'tag');

        if ($tag) {
            $post->whereHas('tags', function ($q) use ($tag) {
                $q->whereSlug($tag);
            });
        }

        return $post;
    }
}
