<?php namespace App\Providers\Orchestra;

use Illuminate\Support\ServiceProvider;

class ExtensionServiceProvider extends ServiceProvider {

    /**
     * Register the service provider
     * 
     * @return void
     */
    public function register()
    {
        $this->app['orchestra.extension.finder']->addPath(app_path().'/Extension/*/*');
    }

}
