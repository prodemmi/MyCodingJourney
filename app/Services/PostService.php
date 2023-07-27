<?php

namespace App\Services;

use App\Repositories\Post\PostRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PostService
{
    public function __construct(private readonly PostRepository $postRepository)
    {
    }

    public function getList(array $filters): LengthAwarePaginator
    {
        return $this->postRepository->list($filters);
    }

    public function getRecent(): Collection
    {
        return $this->postRepository->recent();
    }

    public function getSingleBySlug(string $slug)
    {
        return $this->postRepository->findBySlug($slug);
    }

    public function redirectShortLink(string $shortLink)
    {
        $post = $this->postRepository->findByShortLink($shortLink);

        return redirect('/posts/'.$post->slug);
    }

    public function generateShortLink($length = 10): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
