<?php namespace App\Http\Controllers;

use Orchestra\Routing\Controller as BaseController;
use Orchestra\Support\Traits\ControllerResponseTrait;

abstract class Controller extends BaseController
{
    use ControllerResponseTrait;
}
