<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Using Closure based composers...
        View::composer('*', function ($view) {
            $view->with('project_id', env('CORBADO_PROJECT_ID', 'pro-xxx'));
        });
    }
}
