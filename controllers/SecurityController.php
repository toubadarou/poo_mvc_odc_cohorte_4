<?php

namespace App\Controllers;

use App\Core\ControllerMother;






class SecurityController extends ControllerMother
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
    public function welcome()
    {
        if ($this->request->isGet()) {
            $this->render("security/login.html.php");
        }
    }
}
