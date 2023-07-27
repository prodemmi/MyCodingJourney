<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Posts;
use Livewire\Livewire;
use Tests\TestCase;

class PostsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Posts::class);

        $component->assertStatus(200);
    }
}
