<?php
namespace App\Model;
class AC extends User
{
    protected static string $role = " ROLE_AC";

    //Navigational attributs 
    //OneToMeny AC=>Inscription
    //private array $inscription;

    //Navigational functions:
    //OneToMeny with Inscription

    public function  inscriptions(): array
    {
        $sql = "select i.* from inscription i,personne p
        where i.id=p.inscription_id
        and p.role like 'ROLE_AC'
        and p.id=" . $this->id;
        return [];
    }

    //OneToMeny with Demande
    public function demandes(): array
    {
        
        return [];
    }

    // Initialisation of the role attribut into the CONSTRUCT FUNCTION
    public function __construct()
    {
        $this->role = "ROLE_AC";
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " where role like '" . self::$role . "'";
        echo $sql;
        return  [];
    }
}
