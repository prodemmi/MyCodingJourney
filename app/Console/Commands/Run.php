<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Run extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init the project';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $database = database_path('database.sqlite');
        if ( !file_exists($database) ) {
            $this->alert("database.sqlite not found.");
        }

        $this->info('migrating ...');
        Artisan::call('migrate --force');
        $this->info('migration done.');
        $this->info('seeding ...');
        Artisan::call('db:seed');
        $this->info('seed done.');
        $this->info('installing backpack.');
        Artisan::call('backpack:install --force');
        $this->info('backpack installed.');

        $this->info('project initialized.');
    }
}
