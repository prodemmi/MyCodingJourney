<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Presentation extends Component
{
    public string $slug;

    public function mount(string $slug) {}

    public function render()
    {
        if(!file_exists(public_path('prs/' . $this->slug))){
            abort(404);
        }

        $title = Str::title($this->slug);

        return view('livewire.presentation', ['slug' => $this->slug, 'title' => $title])
            ->layout('base');
    }
}
