<?php namespace App\Http\Filters;

use Illuminate\Contracts\Auth\Authenticator;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AuthFilter
{
    /**
     * The authenticator implementation.
     *
     * @var \Illuminate\Contracts\Auth\Authenticator
     */
    protected $auth;

    /**
     * The response factory implementation.
     *
     * @var \Illuminate\Contracts\Routing\ResponseFactory
     */
    protected $response;

    /**
     * Create a new filter instance.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticator         $auth
     * @param  \Illuminate\Contracts\Routing\ResponseFactory    $response
     */
    public function __construct(Authenticator $auth, ResponseFactory $response)
    {
        $this->auth = $auth;
        $this->response = $response;
    }

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Routing\Route    $route
     * @param  \Illuminate\Http\Request     $request
     * @return mixed
     */
    public function filter(Route $route, Request $request)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return $this->response->make('Unauthorized', 401);
            } else {
                return $this->response->redirectGuest(handles('orchestra::login'));
            }
        }
    }
}
