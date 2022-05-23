<?php

namespace App\Controller;
use App\Core\Controller;
class ClasseController extends Controller{

    public function listerClasse(){
        $this->render("classes/liste");
    }
    public function creerClasse(){
        $this->render("classes/creationClasse");
    }
}