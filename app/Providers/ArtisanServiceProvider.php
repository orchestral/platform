<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('App\Console\InspireCommand');
    }
}
