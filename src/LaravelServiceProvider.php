<?php 

namespace Jevets\Blade\Components\Bootstrap3;

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
        $this->loadViewsFrom(__DIR__.'/views', 'bs3');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/bs3')
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