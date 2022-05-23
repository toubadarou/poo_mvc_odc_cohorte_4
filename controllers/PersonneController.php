<?php

namespace App\Controller;
use App\Core\Controller;
use App\Models\Personne;

class PersonneController extends Controller{
    
    public function lister(){
        if($this->request->isGet()){
            $personnes = Personne::findAll();
            $data = [
                "titre" => "Liste des personnes",
                "personnes" => $personnes
            ];
            $this->render('personnes/liste',$data);
        }
    }
}