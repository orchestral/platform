<?php namespace App\Providers;

use App;
use URL;
use Illuminate\Routing\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function before()
    {
        URL::setRootControllerNamespace(
            trim(config('namespaces.controller'), '\\')
        );
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        App::booted(function () {
            $this->namespaced(function () {
                require app_path('Http/routes.php');
            });
        });
    }

}
