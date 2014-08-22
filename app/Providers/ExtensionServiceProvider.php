<?php namespace App\Providers;

use Orchestra\Foundation\Providers\ExtensionServiceProvider as ServiceProvider;

class ExtensionServiceProvider extends ServiceProvider{

    /**
     * Available orchestra extensions
     * 
     * @var array
     */
    protected $extensions = [
        'app/Extension/*/*'
    ];

}
