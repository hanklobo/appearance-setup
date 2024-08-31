<?php

namespace HankLobo\AppearanceSetup;

use Illuminate\Support\ServiceProvider;

class AppearanceSetupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'appearance-setup');

        $this->publishes([
            __DIR__.'/config/appearance.php' => config_path('appearance.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/appearance-setup'),
        ], 'views');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/appearance-setup'),
        ], 'public');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/appearance.php', 'appearance'
        );
    }
}