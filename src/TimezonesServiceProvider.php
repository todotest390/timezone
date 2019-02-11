<?php

namespace Learning\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->register(Learning\Timezones\TimezonesServiceProvider::class);
        $this->app->singleton(Learning\Timezones\TimezonesServiceProvider::class, function (Application $app) {
            return new TimezonesServiceProvider();
        });
        $this->app->make('Learning\Timezones\TimezonesController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/learning/timezones'),
    ]);
    }
}
