<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // use blueprint macros on App\Macros\Blueprint
        // loop through all macros in the directory
        foreach (glob(app_path('Macros/Blueprint/*.php')) as $filename) {
            // get the filename
            $filename = basename($filename, '.php');

            // get the class name
            $class = 'App\\Macros\\Blueprint\\'.$filename;

            // register the macro
            $this->app->call($class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
