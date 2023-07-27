<?php

namespace Tests\Feature\Livewire;

use App\Livewire\User;
use Livewire\Livewire;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(User::class);

        $component->assertStatus(200);
    }
}
