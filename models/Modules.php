<?php

namespace App\Models;

use App\Core\Model;

class Modules extends Model{
    private int $id;
    private string $libelle;


    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `module` (`libelle`) VALUES (?,?)";
            $result = $db->executeUpdate($sql,[$this->libelle,]);
        $db->closeConnexion();
        return $result;
    }
}