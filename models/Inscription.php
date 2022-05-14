<?php
namespace App\Model;
use App\Core\Model;
use \DateTime;

class Inscription extends Model
{
    //instance attributs
    private int $id;
    private DateTime $date;
    //Navigational attributs 
    //MenyTo One Inscription=>AC
    // private array $inscription;

    //Navigational functions
    //MenyToOne with AC
    public function  ac(): AC
    {
        $sql = "select p.* from personne p,inscription i
                            where p.id=i.personne_ac_id
                            and p.role like 'ROLE_AC'
                            and i.id=" . $this->id;
        return new AC;
    }
    //MenyToOne with AnneeScolaire
    public function  anneescolair(): AnneeScolaire
    {
        $sql = "select a.* from annee_scolair a,inscription i
        where a.id=i.annee_scolair_id
        and i.id=" . $this->id;
        return new AnneeScolaire;
    }

    //MenyToOne with Etudiant
    public function  etudiant(): Etudiant
    {
        $sql = "select p.* from personne p,inscription i
        where p.id=i.personne_etudiant_id
        and p.role like 'ROLE_ETUDIANT'
        and i.id=" . $this->id;
        return new Etudiant;
    }

    // construct function
    public function __construct()
    {
        $this->table = "inscription";
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table();
        echo $sql;
        return  [];
    }
}
