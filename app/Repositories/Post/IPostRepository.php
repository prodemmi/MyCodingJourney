<?php

namespace App\Repositories\Post;

interface IPostRepository
{
    public function list(array $filters);

    public function recent();

    public function findBySlug(string $slug);

    public function findByShortLink(string $shortLink);
}
