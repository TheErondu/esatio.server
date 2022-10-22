<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') == 'local') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        // ...
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
       // condition 1
if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}

// condition 2
if (env('APP_ENV') !== 'local') {
    URL::forceScheme('https');
}

// condition 3
if (env('APP_FORCE_HTTPS', false)) {
    URL::forceScheme('https');
}
    }
}
