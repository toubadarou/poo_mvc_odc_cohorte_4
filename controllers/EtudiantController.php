<?php

namespace App\Controller;
use App\Core\Controller;
use App\Models\Etudiant;

class EtudiantController extends Controller{
    
    public function lister(){
        $etudiant = Etudiant::findAll();
        $data = [
            "titre" => "Liste des étudiants",
            "etudiants" => $etudiant
        ];
        $this->render("etudiants/liste",$data);
    }
    public function ajouterEtudiant(){
        if($this->request->isGet()){
            $this->render("etudiants/ajouter");
        }else{
            extract($_POST);
            $etudiant = new Etudiant;
            $etudiant->setNomComplet($nomComplet);
            $etudiant->setLogin($login);
            $etudiant->setPassword($password);
            $etudiant->setSexe($sexe);
            $etudiant->setMatricule($matricule);
            $etudiant->setAdresse($adresse);
            $etudiant->insert();
        }
    }
}