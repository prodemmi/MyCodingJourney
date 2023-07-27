<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Tags;
use Livewire\Livewire;
use Tests\TestCase;

class TagsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Tags::class);

        $component->assertStatus(200);
    }
}
