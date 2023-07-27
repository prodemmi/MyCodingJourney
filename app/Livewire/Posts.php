<?php

namespace App\Livewire;

use App\Services\PostService;
use App\Services\TagService;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    private PostService $postService;

    private TagService  $tagService;

    public function boot(PostService $postService, TagService $tagService)
    {
        $this->postService = $postService;
        $this->tagService = $tagService;
    }

    public function render()
    {
        $posts = $this->postService->getList(request()->query());
        $tags = $this->tagService->getAll('id', 'title');

        return view('livewire.posts')
            ->with(compact('posts', 'tags'))
            ->layout('base');
    }
}
