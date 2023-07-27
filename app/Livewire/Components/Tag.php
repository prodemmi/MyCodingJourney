<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Tag extends Component
{
    public \App\Models\Tag $tag;

    public ?int            $count = null;

    public function render()
    {
        return view('livewire.components.tag');
    }
}
