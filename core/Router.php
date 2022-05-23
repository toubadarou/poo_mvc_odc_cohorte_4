<?php

namespace App\Core;

use App\Exception\RouteNotFoundException;

class Router
{

    private Request $request;

    public function __construct()
    {
        $this->request = new Request;
    }
    private array $routes = [];
    public function route(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }

    public function resolve()
    {
        $uri = '/' . $this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];

            // Opération de destruction
            [$ctrClass, $action] = $route;
            // ceci équivaut à écrire 
            // $ctrClass = $route[0];
            // $action = $route[1];

            if (class_exists($ctrClass) && method_exists($ctrClass, $action)) {
                $ctrl = new $ctrClass($this->request); // $ctrl = new SecurityController(); intanciation
                $trial = ['SecurityController/authentification'];
                $trialTest = explode("\\", $ctrl::class)[2] . '/' . $action;
                if (in_array($trialTest, $trial)) {
                    $ctrl->$action();                    // $ctrl->authentification();
                } elseif (Session::is_connect()) {
                    $ctrl->$action();
                } else {
                    $ctrl->$action();
                }
            }
        } else {
            throw new RouteNotFoundException();
        }
    }
}
