<?php namespace App\Providers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Configure the application's logging facilities.
     *
     * @param  \Illuminate\Contracts\Logging\Log  $log
     * @return void
     */
    public function boot(Log $log)
    {
        // Here we will configure the error logger setup for the application which
        // is built on top of the wonderful Monolog library. By default we will
        // build a basic log file setup which creates a single file for logs.

        $log->useFiles(storage_path('logs/laravel.log'));
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
