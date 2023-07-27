<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Filters extends Component
{
    public array $tags = [];

    public array $sorts = ['Latest', 'Oldest', 'Most Popular'];

    public function render()
    {
        return view('livewire.components.filters');
    }
}
