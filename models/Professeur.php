<?php

namespace App\model;
class Professeur extends Personne
{
    protected static string $role = " ROLE_PROFESSEUR";
    // protected static string $table = "professeur";
    private string $grade;
    
    //Navigational functions:
    
    //MenyToMeny with Classe
    public function professeurs(): array
    {
        return [];
    }
    
    //MenyToMeny with Module
    public function modules(): array
    {
        return [];
    }

    //MenyToOne with RP
    public function rp(): RP
    {
        return new RP;
    }
    public function __construct()
    {
        // self::$role = "ROLE_PROFESSEUR";
    }

    /**
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " where role like '" . self::$role . "'";
        echo $sql;
        return  [];
    }

    public function insert(): int
    {
        $sql = "INSERT INTO personne (nom_complet, role, grade) VALUES (?,?,?)";
        $db = self::executeQuery($sql, "excuteUpdate", [ $this->fullName, self::$role,$this-> grade]);
        // die("in insert");
        return $db;
    }
}
