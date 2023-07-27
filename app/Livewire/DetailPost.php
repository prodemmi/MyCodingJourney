<?php

namespace App\Livewire;

use App\Services\PostService;
use Livewire\Component;

class DetailPost extends Component
{
    private string $slug;

    private PostService $postService;

    public function boot(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $post = $this->postService->getSingleBySlug($this->slug);

        return view('livewire.detail-post')->with(compact('post'))->layout('base');
    }
}
