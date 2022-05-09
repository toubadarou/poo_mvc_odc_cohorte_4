<?php
class AnneeScolaire extends Model
{
    protected int $id;
    protected string $libelleAnnee;

    //Navigational functions:
    //OneToMeny with Inscription
    public function  inscriptions(): array
    {
        return [];
    }
    // construct function
    public function __construct()
    {
        $this->table = "annee_scolaire";
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
     * Get the value of libelleAnnee
     */
    public function getLibelleAnnee()
    {
        return $this->libelleAnnee;
    }

    /**
     * Set the value of libelleAnnee
     *
     * @return  self
     */
    public function setLibelleAnnee($libelleAnnee)
    {
        $this->libelleAnnee = $libelleAnnee;

        return $this;
    }
}
