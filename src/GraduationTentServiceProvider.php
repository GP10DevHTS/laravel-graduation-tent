<?php

namespace Gp10devhts\GraduationTent;

use Illuminate\Support\ServiceProvider;

class GraduationTentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings here
    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/graduation-tent.php', 'graduation-tent');
        $this->publishes([
            __DIR__.'/../config/graduation-tent.php' => config_path('graduation-tent.php'),
        ], 'config');

        
        // Package bootstrapping logic
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'graduation-tent');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/graduation-tent'),
        ]);
    }
}
