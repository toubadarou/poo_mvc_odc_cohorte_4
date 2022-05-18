<?php
namespace App\Model;
use App\Core\Model;
class Etudiant extends User
{
    // Instancing attributs
    protected static string $role = " ROLE_ETUDIANT";
    private int $matricule;
    private string $sexe;
    private string $adresse;

    // Navigational functions:
    //OneToMeny with Demande
    public function demandes(): array
    {
        $sql ="select d.* from demande d,personne p
                            where d.id=d.personne_id
                            and p.role like 'ROLE_ETUDIANT'
                            and p.id=".$this->id;
        return [];
    }

    //OneToMeny with Inscription
    public function inscriptions(): array
    {
        $sql ="select i.* from inscription i,personne p
                            where i.id=i.personne_etudiant_id
                            and p.role like 'ROLE_ETUDIANT'
                            and p.id=".$this->id;
        return [];
    }
    // construct function
    public function __construct()
    {
        // $this->role = "ROLE_ETUDIANT";
    }

    /**
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " where role like '" . self::$role . "'";
        echo $sql;
        return  [];
    }
}
