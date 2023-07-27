<?php

namespace Tests\Feature\Livewire\Components;

use App\Livewire\Components\Filters;
use Livewire\Livewire;
use Tests\TestCase;

class FiltersTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Filters::class);

        $component->assertStatus(200);
    }
}
