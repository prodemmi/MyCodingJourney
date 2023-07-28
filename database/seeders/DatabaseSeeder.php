<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        if ( !Schema::hasTable('tags') ) {
            $this->call(TagSeeder::class);
        }

        if ( !Schema::hasTable('users') ) {
            $this->call(AdminSeeder::class);
        }

        if ( app()->isLocal() ) {
            $this->call(PostSeeder::class);
        }
    }
}
