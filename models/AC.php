<?php

namespace App\Model;
die("in ac");
class AC extends User
{
    protected static string $role = " ROLE_AC";

    //Navigational attributs 
    //OneToMeny AC=>Inscription
    //private array $inscription;

    //Navigational functions:
    //OneToMeny with Inscription

    public function  inscriptions(): array|null
    {
        $sql = "select i.* from inscription i,personne p
        where i.id=p.inscription_id
        and p.role like 'ROLE_AC'
        and p.id=?";
        return parent::findById($sql, [$this->id]);
    }

    //OneToMeny with Demande
    public function demandes(): array
    {

        return [];
    }

    // Initialisation of the role attribut into the CONSTRUCT FUNCTION
    public function __construct()
    {
        // $this->role = "ROLE_AC";
    }
    public static function findAll(): array
    {
        $sql = "select * from personne where role like 'ROLE_AC' ";
        return  parent::findBy($sql);
    }
    public function insert(): int
    {
        die("in insert");
        $sql = "INSERT INTO personne (nom_complet, role, login,password) VALUES (?,?,?,?)";
        $db = parent::executeQuery($sql, "excuteUpdate", [$this->fullName, self::$role, $this->login,$this->password]);
        return $db;
    }
}
