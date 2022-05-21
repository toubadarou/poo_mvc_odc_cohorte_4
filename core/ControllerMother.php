<?php

namespace App\Core;

use App\Core\Request;
use App\Core\Constantes;

class ControllerMother
{
    protected Request $request;
    //injection de la request dans le constructeur
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function render(string $path, array $data = [])
    {
        $data["Constantes"] = Constantes::class;
        $data["request"] = $this->request;

        ob_start();
        extract($data);
        require_once(Constantes::ROOT() . "templates/" . $path);
        $content_for_views = ob_get_clean();
        // var_dump(Constantes::ROOT());die;
        require_once(Constantes::ROOT() . "templates/layout/base.html.php");
    }
    public function redirectToRoute(string $uri)
    {
        header('location:' . Constantes::WEB_ROOT . $uri);
    }
}
