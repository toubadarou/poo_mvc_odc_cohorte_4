<?php

namespace App\Core;

use App\Core\Request;
use App\Exception\PageNotFoundException;



class Router
{
    private Request $request;
    private array $routes = [];
    public function __construct()
    {
        $this->request = new Request;
    }
    public function route(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }
    public function resolve()
    {

        $uri = "/" . $this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];
            [$ctrClass, $action] = $route;
            // $ctrClass = explode("\\", $route[0]);
            // var_dump($ctrClass[2]);die;

            if (class_exists($ctrClass) && method_exists($ctrClass, $action)) {
                var_dump("gfgjyh");
                // die;
                $ctr = new $ctrClass($this->request);
                //    $ctr->{$action()};
                call_user_func(array($ctr, $action));
            }else {
                var_dump("else");
                // die;
                throw new PageNotFoundException();
            }
        } else {
            // $obj = new SecurityController($this->request);
            // call_user_func(array($obj, "authentification"));
            //    throw new RouteNotFoundException();

        }
    }
}
