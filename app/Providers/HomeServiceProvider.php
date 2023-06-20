<?php

namespace App\Providers;

use App\Services\HomeService;
use App\Services\Impl\HomeServiceImpl;
use App\Services\Impl\UserServiceImpl;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public array $singletons = [
        HomeService::class => HomeServiceImpl::class,
    ];

    public function provides(): array
    {
        return [HomeService::class,];
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
