<?php

namespace Yankewei\LaravelSensitive;

use Illuminate\Support\ServiceProvider;
use Yankewei\LaravelSensitive\Sensitive;

class SensitiveServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Sensitive::class, function ($app) {
            return new Sensitive();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Sensitive::class, 'sensitive'];
    }
}
