<?php
namespace App\Controller;
use App\Core\Controller;
use App\Models\Professeur;

class ProfesseurController extends Controller{
    public function affecterClasse(){

    }
    public function listerProfesseur(){
        $profs = Professeur::findAll();
        $data = [
            'titre' => 'Liste des professeurs',
            'profs' => $profs
        ];
        $this->render('professeurs/liste',$data);
    }
    public function ajouterProfesseur(){
        if($this->request->isGet()){
            $this->render('professeurs/creerProf');
        }else{
            extract($_POST);
            $prof = new Professeur();
            $prof->setNomComplet($nomComplet);
            $prof->setGrade($grade);
            $prof->insert();
        }
    }
}