<?php
namespace App\Model;
use App\Core\Model;
class RP extends User
{
    protected static string $role = " ROLE_RP";

    //Navigational functions:

    //OneToMeny with Professeur
    public function professeurs(): array
    {
        return [];
    }

    //OneToMeny with Classe
    public function classes(): array
    {
        return [];
    }

    //OneToMeny with Demande
    public function demandes(): array
    {
        return [];
    }
    public function __construct()
    {
        $this->role = "ROLE_RP";
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " where role like '" . self::$role . "'";
        echo $sql;
        return  [];
    }
}
