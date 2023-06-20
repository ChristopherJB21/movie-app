<?php

namespace App\Providers;

use App\Services\CinemaService;
use App\Services\Impl\CinemaServiceImpl;
use Illuminate\Support\ServiceProvider;

class CinemaServiceProvider extends ServiceProvider
{
    public array $singletons = [
        CinemaService::class => CinemaServiceImpl::class,
    ];

    public function provides(): array
    {
        return [CinemaService::class,];
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
