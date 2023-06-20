<?php

namespace App\Providers;

use App\Services\Impl\MovieServiceImpl;
use App\Services\MovieService;
use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
{
    public array $singletons = [
        MovieService::class => MovieServiceImpl::class
    ];

    public function provides(): array
    {
        return [MovieService::class, ];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
