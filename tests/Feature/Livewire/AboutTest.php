<?php

namespace Tests\Feature\Livewire;

use App\Livewire\About;
use Livewire\Livewire;
use Tests\TestCase;

class AboutTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(About::class);

        $component->assertStatus(200);
    }
}
