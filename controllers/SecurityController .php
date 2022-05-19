<?php

namespace App\Controller;

use App\core\Controller;
use App\core\Request;

class SecurityController extends Controller
{

    public function Authentication()
    { //1-Affichage du formulaire =>GET
        if ($this->request->isGet()) {
            $this->render("security/login.html.php");
        }
        //2-Traitement aprés la soumission
        # code...
    }
    public function deconnexion()
    {
        $this->redirectToRoute("login");
    }
}
