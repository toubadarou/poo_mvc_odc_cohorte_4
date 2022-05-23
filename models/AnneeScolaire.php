<?php
namespace App\Models;
use App\Core\Model;
class AnneeScolaire extends Model{

    private int $id;
    private string $libelle;
    public function __construct()
    {
        
    }
    public function inscription():array{
        $sql = "select i.* from inscription i, ".parent::table()." a
                where i.annee_id = a.id
                and a.id = ?";
        return parent::findBy($sql,[$this->id]);
    }

    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `annee_scolaire` (`libelle`) VALUES (?)";
            $result = $db->executeUpdate($sql,[$this->libelle]);
        $db->closeConnexion();
        return $result;
    }
}