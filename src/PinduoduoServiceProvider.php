<?php

namespace Xidiankeji\Pinduoduo;

use Illuminate\Support\ServiceProvider;

class PinduoduoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../config/pinduoduo.php');
        $this->publishes([$source => config_path('pinduoduo.php')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pinduoduo', function ($app) {
            return new Pinduoduo();
        });
    }
}
