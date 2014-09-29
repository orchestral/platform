<?php namespace App\Http\Filters;

use Illuminate\Contracts\Auth\Authenticator;
use Illuminate\Http\RedirectResponse;

class GuestFilter
{
    /**
     * The authenticator implementation.
     *
     * @var \Illuminate\Contracts\Auth\Authenticator
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticator $auth
     */
    public function __construct(Authenticator $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Run the request filter.
     *
     * @return mixed
     */
    public function filter()
    {
        if ($this->auth->check()) {
            return new RedirectResponse(url('/'));
        }
    }
}
