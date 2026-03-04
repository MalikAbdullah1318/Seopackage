<?php

namespace Abdullah\LaravelSeo\Providers;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-seo');

        $this->publishes([
            __DIR__.'/../../config/seo.php' => config_path('seo.php'),
        ], 'seo-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/seo.php',
            'seo'
        );
    }
}