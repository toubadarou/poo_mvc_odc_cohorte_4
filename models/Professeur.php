<?php
namespace App\Models;

class Professeur extends Personne{
    
    private string $grade;
    public function classes():array{
        return [];
    }

    public function __construct()
    {
        parent::$role = "ROLE_PROFESSEUR";
    }

    public static function findAll(): array
    {
        $sql = "select `grade`, `id`, `nom_complet`, `role` from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
        return parent::findBy($sql,[]);
    }

    public function insert():int{
        $db = self::database();
        $db->connexionBD();
            $sql = "INSERT INTO `personne` (`nom_complet`, `role`, `grade`) VALUES (?,?,?)";
            $result = $db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
        $db->closeConnexion();
        return $result;
    }
 
    public function getGrade()
    {
        return $this->grade;
    }
 
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }
}