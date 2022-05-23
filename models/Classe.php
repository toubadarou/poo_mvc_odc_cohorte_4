<?php
namespace App\Models;
use App\Core\Model;
class Classe extends Model{

    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;
    public function __construct()
    {
        
    }
    public function rp():RP{
        $sql = "select p.* from personne p, ".parent::table()." c
                where p.id = c.rp_id
                and c.id = ?";
        return parent::findBy($sql,[$this->id]);
    }
    public function professeurs():array|null{
        $sql = "select p.* from personne p, ".parent::table()." c, affecter a
                where p.id = a.professeur_id
                and a.classe_id = c.id
                and c.id = ?";
        return parent::findBy($sql,[$this->id]);
    }
    public function inscription():array|null{
        $sql = "select i.* from inscription i, ".parent::table()." c
                where i.classe_id = c.id
                and c.id = ?";
        return parent::findBy($sql,[$this->id]);
    }
    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `classe` (`libelle`, `filiere`, `niveau`, `rp_id`) VALUES (?,?,?,?)";
            $result = $db->executeUpdate($sql,[$this->libelle,$this->filiere,$this->niveau,$this->rp()->id]);
        $db->closeConnexion();
        return $result;
    }
}