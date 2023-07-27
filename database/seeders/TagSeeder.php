<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public $tags = [
        // Back-End tools
        'Laravel',
        'Lumen',
        'Django',
        'Go-Gin',
        'RubyOnRails',
        'ExpressJs',
        'Flask',

        // Front-End tools
        'Vuejs',
        'ReactJs',
        'AngularJs',
        'Svelte',
        'NextJs',
        'NuxtJs',
        'JQuery',
        'Tailwind',
        'Bootstrap',

        // Mobile tools
        'Flutter',
        'React-Native',

        // Languages
        'PHP',
        'Javascript',
        'Go',
        'Python',
        'NodeJs',
        'UI/UX',

        // Databases
        'Database',
        'MySql',
        'Sql',
        'Sqlite',
        'Postgresql',
        'MongoDB',
        'Blockchain',

        // Desktop tools
        'QT',
        'PyQT',
        'ElectronJs',

        // Other
        'Clean-Code',
        'Network',
        'Git',
        'Git-Flow',
        'Docker',
        'kubernetes',
        'Kafka',
        'Vim',
        'Linux',
        'DevOps',
        'Security',
    ];

    public function run(): void
    {
        foreach ($this->tags as $weight => $tag) {
            DB::table('tags')->insert([
                'id' => Str::uuid(),
                'title' => $tag,
                'slug' => Str::slug($tag),
                'weight' => $weight,
            ]);
        }
    }
}
