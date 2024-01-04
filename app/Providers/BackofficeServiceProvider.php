<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackOfficeServiceProvider extends ServiceProvider
{
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
        $this->app->bind(
            \Illuminate\Pagination\LengthAwarePaginator::class,
            \App\Overrides\LengthAwarePaginator::class,
        );
    }
}
