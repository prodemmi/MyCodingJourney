<?php

namespace App\Providers;

use App\Repositories\Post\IPostRepository;
use App\Repositories\Post\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(IPostRepository::class, PostRepository::class);
    }
}
