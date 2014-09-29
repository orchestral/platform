<?php namespace App\Http\Filters;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Response;

class MaintenanceFilter
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new filter instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application $app
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
