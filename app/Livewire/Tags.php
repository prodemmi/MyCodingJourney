<?php

namespace App\Livewire;

use App\Services\TagService;
use Livewire\Component;

class Tags extends Component
{
    private TagService $tagService;

    public function boot(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    public function render()
    {
        $tags = $this->tagService->getAll('id', 'title', 'slug');

        return view('livewire.tags')
            ->with(compact('tags'))
            ->layout('base');
    }
}
