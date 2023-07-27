<?php

namespace Tests\Feature\Livewire\Components;

use App\Livewire\Components\Paginator;
use Livewire\Livewire;
use Tests\TestCase;

class PaginatorTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Paginator::class);

        $component->assertStatus(200);
    }
}
