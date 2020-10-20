<?php

namespace App\Providers;

use App\Interfaces\PostInterfaces;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostInterfaces::class,
            PostRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
