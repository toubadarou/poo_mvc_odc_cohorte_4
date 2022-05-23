<?php
namespace App\Controller;
use App\Core\Controller;
use App\Models\AC;

class ACController extends Controller{
    public function listerAC(){
        $ac = AC::findAll();
        $data = [
            "titre" => "Liste des ACs",
            "acs" => $ac
        ];
        $this->render("acs/liste",$data);
    }
    public function ajouterAC(){
        if ($this->request->isGet()) {
            $this->render("acs/ajouter");
        } else {
            extract($_POST);
            $ac = new AC();
            $ac->setNomComplet($nomComplet);
            $ac->setLogin($login);
            $ac->setPassword($password);
            $ac->insert();
            $this->redirectToRoute('acs');
        }   
    }
}
