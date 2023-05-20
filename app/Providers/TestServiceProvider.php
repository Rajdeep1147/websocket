<?php

namespace App\Providers;

use App\Repositories\InterfaceClasses\BaseRepositoryInterface;
use App\Repositories\InterfaceClasses\UserRepositoryInterface;
use App\Repositories\RepositoryClasses\BaseRepository;
use App\Repositories\RepositoryClasses\UserRepository;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
