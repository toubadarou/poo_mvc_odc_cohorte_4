<?php

namespace App\Exception;

use Exception;



class PageNotFoundException extends Exception
{
    public $message = "Page not found error 404";
}
