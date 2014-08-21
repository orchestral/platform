<?php namespace App\Http\Filters;

use Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Session\TokenMismatchException;

class CsrfFilter
{
    /**
     * Run the request filter.
     *
     * @param  Route    $route
     * @param  Request  $request
     * @return mixed
     * @throws \Illuminate\Session\TOkenMismatchException
     */
    public function filter(Route $route, Request $request)
    {
        if (Session::token() != $request->input('_token')) {
            throw new TokenMismatchException;
        }
    }

}
