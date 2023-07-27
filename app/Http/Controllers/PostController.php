<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(public readonly PostService $postService)
    {
    }

    public function redirectShortLink(string $shortLink)
    {
        return $this->postService->redirectShortLink($shortLink);
    }
}
