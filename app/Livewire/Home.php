<?php

namespace App\Livewire;

use App\Services\PostService;
use Livewire\Component;

class Home extends Component
{
    private PostService $postService;

    public function boot(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function render()
    {
        $recentPosts = $this->postService->getRecent();

        return view('livewire.home')->with(compact('recentPosts'))->layout('base');
    }
}
