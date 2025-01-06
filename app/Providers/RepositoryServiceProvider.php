<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Database\Interfaces\UserRepositoryInterface;
use Database\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        #$this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserRepository::class, function ($app) {
            return new UserRepository();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
