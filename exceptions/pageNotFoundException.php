<?php

namespace App\exception;

use Exception;

class RouteNotFoundException extends Exception
{
    public $message = "Page not found error 404";
}
