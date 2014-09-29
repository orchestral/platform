<?php namespace App\Http\Filters;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Response;

class MaintenanceFilter
{
    /**
     * The application implementation.
     *
     * @var Application
     */
    protected $app;

    /**
     * Create a new filter instance.
     *
     * @param  Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Run the request filter.
     *
     * @return mixed
     */
    public function filter()
    {
        if ($this->app->isDownForMaintenance()) {
            return new Response('Be right back!', 503);
        }
    }
}
