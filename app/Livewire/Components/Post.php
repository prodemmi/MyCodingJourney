<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Post extends Component
{
    public \App\Models\Post $post;

    public function render()
    {
        return view('livewire.components.post');
    }
}
