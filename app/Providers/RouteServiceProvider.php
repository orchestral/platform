<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Orchestra\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $this->loadFrontendRoutesFrom(base_path('routes/web.php'));
        $this->loadBackendRoutesFrom(base_path('routes/admin.php'), 'Admin');
    }
}
