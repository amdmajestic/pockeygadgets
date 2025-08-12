<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class RouteServiceProvider extends ServiceProvider
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
        Route::macro('authRoute', function ($routeName, $parameters = []) {
            // if (Auth::check() && Auth::user()->is_admin) {
                // $routeName = 'admin.' . $routeName;
            // }

            return route($routeName, $parameters);
        });
    }
}
