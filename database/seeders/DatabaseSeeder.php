<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        if ( !Tag::count() ) {
            $this->call(TagSeeder::class);
        }

        if ( !User::count() ) {
            $this->call(AdminSeeder::class);
        }

        if ( app()->isLocal() ) {
            $this->call(PostSeeder::class);
        }
    }
}
