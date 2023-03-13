<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mchev\Banhammer\IP;

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
        // IP::ban("127.0.0.1");
        // IP::unban("127.0.0.1");
    }
}
