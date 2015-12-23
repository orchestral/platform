<?php namespace App\Http;

use Orchestra\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            Middleware\VerifyCsrfToken::class,
        ],

        'orchestra' => [
            'web',
            \Orchestra\Foundation\Http\Middleware\LoginAs::class,
            \Orchestra\Foundation\Http\Middleware\UseBackendTheme::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'backend' => \Orchestra\Foundation\Http\Middleware\UseBackendTheme::class,
        'can' => \Orchestra\Foundation\Http\Middleware\Can::class,
        'guest' => Middleware\RedirectIfAuthenticated::class,
        'manage' => \Orchestra\Foundation\Http\Middleware\CanManage::class,
    ];
}
