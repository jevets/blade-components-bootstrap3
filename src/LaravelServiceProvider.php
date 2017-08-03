<?php 

namespace Jevets\BootstrapBlade;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'bs');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/bs')
        ], 'views');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}