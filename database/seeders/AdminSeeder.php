<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $name = 'Emad Malekpour';
        $email = 'prodemmi@gmail.com';
        $password = env('ADMIN_PASSWORD');

        $hashed = Hash::make($password, [
            'rounds' => 10,
        ]);

        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => $name,
            'email' => $email,
            'is_admin' => true,
            'password' => $hashed,
        ]);
    }
}
