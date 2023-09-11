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
        \Spatie\Flash\Flash::levels([
            'success' => 'bg-green-50 border border-green-200 text-sm text-green-600 rounded-md p-4',
            'warning' => 'bg-orange-50 border border-orange-200 text-sm text-orange-600 rounded-md p-4',
            'error' => 'bg-red-50 border border-red-200 text-sm text-red-600 rounded-md p-4',
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
