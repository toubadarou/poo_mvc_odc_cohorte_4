<?php
namespace App\Models;
class RP extends User{

    public function __construct()
    {
        parent::$role = "ROLE_RP";
    }

    public function demandes():array{
        $sql = "select d.* from demande d, ".parent::table()." p
                where d.rp_id = p.id
                and d.id = ?";
        return parent::findBy($sql,[$this->id]);
    }

    public function classes():array{
        $sql = "select c.* from classe c, ".parent::table()." p
                where c.rp_id = p.id
                and d.id = ?";
        return parent::findBy($sql,[$this->id]);
    }

    public function professeurs():array{
        $sql = "select d.* from demande e, ".parent::table()." p
                where d.rp_id = p.id
                and d.id = ?";
        return parent::findBy($sql,[$this->id]);
    }

    public static function findAll(): array
    {
        $sql = "select * from ".parent::table()." where role like 'ROLE_RP'";
        return parent::findBy($sql,[]);
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