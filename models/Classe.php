<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model
{
    private int $id;
    private string $libelle;
    private string $fillere;
    private string $niveau;

    //Navigational function 
    //MenyToMeny with Professeur
    public function Professeurs(): array
    {
        $sql = "select p.* from personne p,classe c
        where p.id=c.personne_id
        and p.role like 'ROLE_PROFESSEUR'
        and c.id=" . $this->id;
        return [];
    }

    //MenyToOne with RP
    public function rp(): RP
    {
         $sql = "select p.* from personne p,classe c
        where p.id=c.personne_id
        and p.role like 'ROLE_RP'
        and c.id=" . $this->id;
        return new RP;
    }

    //OneToMeny with Incription
    public function inscriptions(): array
    {
        $sql = "select i.* from inscription i,classe c
        where i.id=c.inscription_id
        and c.id=" . $this->id;
        return [];
    }
    // construct function
    public function __construct()
    {
        $this->table = "classe";
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

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of fillere
     */
    public function getFillere()
    {
        return $this->fillere;
    }

    /**
     * Set the value of fillere
     *
     * @return  self
     */
    public function setFillere($fillere)
    {
        $this->fillere = $fillere;

        return $this;
    }

    /**
     * Get the value of niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() ;
        echo $sql;
        return  [];
    }
}
