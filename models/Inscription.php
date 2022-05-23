<?php
namespace App\Models;
use App\Core\Model;
class Inscription extends Model{

    public function __construct()
    {
        
    }
    private int $id;
    // ManyToOne => AC
    public function ac():AC{
        $sql = "select p.* from ".parent::table()." i, personne p 
                where p.id = i.ac_id 
                and p.role like 'ROLE_AC'
                and i.id = ?";
        return parent::findBy($sql,[$this->id],true); 
    }

    public function anneeScolaire():AnneeScolaire{
        $sql = "select a.* from ".parent::table()." i, annee_scolaire a 
                where a.id = i.annee_id 
                and i.id = ?";
        return parent::findBy($sql,[$this->id],true);
    }
    public function etudiant():Etudiant{
        $sql = "select p.* from personne p ".parent::table()." i
                where i.etudiant_id = p.id
                and p.role like 'ROLE_ETUDIANT'
                and i.id = ?";
        return parent::findBy($sql,[$this->id],true);
    }
    public function classe():Classe{
        $sql = "select c.* from classe c ".parent::table()." i
                where i.classe_id = c.id
                and i.id = ?";
        return parent::findBy($sql,[$this->id],true);
    }
    
}