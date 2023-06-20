<?php

namespace App\Providers;

use App\Services\BuyTicketService;
use App\Services\Impl\BuyTicketServiceImpl;
use Illuminate\Support\ServiceProvider;

class BuyTicketProvider extends ServiceProvider
{
    public array $singletons = [
        BuyTicketService::class => BuyTicketServiceImpl::class
    ];

    public function provides(): array
    {
        return [BuyTicketService::class, ];
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
