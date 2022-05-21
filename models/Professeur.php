<?php

namespace App\Model;

use App\Model\RP;
use App\Model\Personne;


class Professeur extends Personne
{
    protected static string $role = "ROLE_PROFESSEUR";
    // protected static string $table = "professeur";
    private string $grade;

    //Navigational functions:

    //MenyToMeny with Classe
    public function classe(): array|null
    {
        $sql = "select c.* from classe c,personne p
        where c.id=c.classe_id
        and p.role like 'ROLE_PROFESSEUR'
        and p.id=?";
        return parent::findById($sql, [$this->id]);

    }

    //MenyToMeny with Module
    public function modules(): array|null
    {
        $sql = "select m.* from module m,personne p
        where m.id=c.module_id
        and p.role like 'ROLE_PROFESSEUR'
        and p.id=?";
        return parent::findById($sql, [$this->id]);
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
    public static function findAll(): array|null
    {
        $sql = "select nom_complet,role,grade from personne where role like'".self::$role."'";
        return  parent::findBy($sql);
    }

    // public function insert(): int
    // {
    //     $sql = "INSERT INTO personne (nom_complet, role, grade) VALUES (?,?,?)";
    //     $db = self::executeQuery($sql, "excuteUpdate", [$this->fullName, self::$role, $this->grade]);
    //     // die("in insert");
    //     return $db;
    // }
}
