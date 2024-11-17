<?php

namespace DigitalCoreHub\TinypngLaravel;

use Spatie\LaravelPackageTools\Package;
use DigitalCoreHub\TinypngLaravel\TinypngLaravel;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DigitalCoreHub\TinypngLaravel\Commands\TinypngLaravelCommand;

class TinypngLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tinypng-laravel')
            ->hasConfigFile();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tinypng.php', 'tinypng');

        $this->app->singleton('tinypng', function ($app) {
            return new TinypngLaravel();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/tinypng.php' => config_path('tinypng.php'),
        ], 'config');
    }
}
