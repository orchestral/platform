<?php

namespace App\Providers;

use Orchestra\Installation\Events\InstallationCompleted;
use Orchestra\Installation\Listeners\MigrateDatabaseSchema;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        InstallationCompleted::class => [
            MigrateDatabaseSchema::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
