<?php

namespace Tests\Feature\Livewire\Components;

use App\Livewire\Components\Tag;
use Livewire\Livewire;
use Tests\TestCase;

class TagTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Tag::class);

        $component->assertStatus(200);
    }
}
