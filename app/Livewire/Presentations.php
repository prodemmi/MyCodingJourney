<?php

namespace App\Livewire;

use Livewire\Component;

class Presentations extends Component
{
    public function render()
    {
        return view('livewire.presentations')
            ->layout('base');
    }
}
