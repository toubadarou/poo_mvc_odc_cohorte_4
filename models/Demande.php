<?php
namespace App\Models;

use App\Core\Model;

class Demande extends Model{

    private int $id;
    private string $motif;
    private string $date;

    public function etudiant():Etudiant{
        $sql = "select e.* from etudiant e, ".parent::table()." d
                where e.id = d.etudiant_id
                and d.id = ?";
        return parent::findBy($sql,[($this->id)],true);
    }

    public function rp():RP{
        $sql = "select r.* from rp r, ".parent::table()." d
                where r.id = d.rp_id
                and d.id = ?";
        return parent::findBy($sql,[$this->id],true);
    }
    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `demande` (`motif`, `date`) VALUES (?,?)";
            $result = $db->executeUpdate($sql,[$this->motif,$this->date]);
        $db->closeConnexion();
        return $result;
    }
}