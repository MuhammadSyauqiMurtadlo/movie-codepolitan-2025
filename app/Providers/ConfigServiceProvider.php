<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ConfigServiceProvider extends ServiceProvider
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
        $config = [
            'title' => 'My Application',
            'year' => '2023',
            'author' => 'John Doe',
            'description' => 'This is a sample application.',
            'theme' => 'dark'
        ];

        View::share('configuration', $config);
    }
}
