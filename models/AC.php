<?php

namespace App\Models;
class AC extends User{
    public function inscription():array{
        $sql = "select i.* from inscription i, ".parent::table()." p
                where i.ac_id = p.id
                and i.id = ?";
        return parent::findBy($sql,[$this->id]);
    }

    public function __construct()
    {
        parent::$role = "ROLE_AC";
    }

    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionBD();
            $sql = "select id, nom_complet, role, login, password from ".parent::table()." where role like 'ROLE_AC'";
            $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }

    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `personne` (`nom_complet`, `role`, `login`, `password`) VALUES (?,?,?,?)";
            $result = $db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        $db->closeConnexion();
        return $result;
    }
 
    
}