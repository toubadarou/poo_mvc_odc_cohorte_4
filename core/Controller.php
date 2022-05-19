<?php

namespace App\core;

use App\core\Request;

class Controller
{
    protected Request $request;
    //injection de la request dans le constructeur
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function render(string $path, array $data = [])
    {
        $data["Constantes"] = Constante::class;
        $data["Request"] = $this->request;
        //Dans une vue $Constante:: la constante
        //Dans une vue $Request la request
        extract($data);
        require_once(Constante::ROOT() . "templates/" . $path);
    }
    public function redirectToRoute(string $uri)
    {
        header('location:' . Constante::WEB_ROOT . $uri);
    }
}
