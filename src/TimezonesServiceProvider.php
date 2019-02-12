<?php

namespace Learning\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'config/timezone.php' => config_path('timezone.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        include __DIR__.'/routes/web.php';
//        $this->app->make('Learning\Timezones\TimezonesController');
    }
}
