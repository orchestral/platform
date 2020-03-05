<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Orchestra\Extension\Concerns\DomainAware;
use Laravie\Dhosa\HotSwap;

class AppServiceProvider extends ServiceProvider
{
    use DomainAware;

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        HotSwap::override(User::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
