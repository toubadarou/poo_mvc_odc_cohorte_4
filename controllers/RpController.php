<?php

namespace App\Controller;
use App\Core\Controller;
use App\Models\RP;
class RpController extends Controller{

    public function lister(){
        $rp = RP::findAll();
            $data =[
                "titre" => "Liste des RPs",
                "rps" => $rp
            ];
        $this->render('rps/liste',$data);
    }
    
    public function ajouterRp(){
        if($this->request->isGet()){
            $this->render("rps/ajouter");
        }else{
            extract($_POST);
            $rp = new RP();
            $rp->setNomComplet($nomComplet);
            $rp->setLogin($login);
            $rp->setPassword($password);
            $rp->insert();
        }
    }
}