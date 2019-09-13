<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Orchestra\Routing\Concerns\ControllerResponse;
use Orchestra\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ControllerResponse, DispatchesJobs, ValidatesRequests;
}
