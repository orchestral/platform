<?php namespace App\Http\Controllers;

use Orchestra\Routing\Controller as BaseController;
use Orchestra\Routing\Traits\ControllerResponseTrait;

abstract class Controller extends BaseController
{
    use ControllerResponseTrait;
}
