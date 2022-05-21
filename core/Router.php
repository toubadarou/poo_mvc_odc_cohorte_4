<?php

namespace App\core;

use App\exception\RouteNotFoundException;

class Router
{
    private Request $request;
    private array $routes=[];
    public function __construct()
    {
        $this->request=new Request;
    }
    public function route(string $uri, array $action)
    {
        $this->routes[$uri]=$action;
    }
    public function resolve()
    {
        $uri="/".$this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            $route=$this->routes[$uri];
            [$ctrClass, $action]=$route;
           if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {
               $ctr=new $ctrClass($this->request);
               $ctr->{$action()};
               call_user_func(array($ctr,$action));
           } else {
           throw new RouteNotFoundException();
               
           }
           
        } else {
        //    throw new RouteNotFoundException();
           
        }
        
    }
}
