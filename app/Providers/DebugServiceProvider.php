<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DebugServiceProvider extends ServiceProvider
{
    /**
     * Register any debug handlers.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['orchestra.debug.listener']->attachDebugger();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
