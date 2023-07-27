<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->callOnce(TagSeeder::class);
        $this->callOnce(AdminSeeder::class);
        $this->callOnce(PostSeeder::class);
    }
}
