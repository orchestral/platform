<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Orchestra\Routing\Controller as BaseController;
use Orchestra\Routing\Traits\ControllerResponseTrait;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use ControllerResponseTrait, DispatchesJobs, ValidatesRequests;
}
