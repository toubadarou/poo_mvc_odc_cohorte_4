<?php
class Etudiant extends User
{
    // Instancing attributs
    private int $matricule;
    private string $sexe;
    private string $adresse;

    // Navigational functions:
    //MenyToOne with AC
    public function rp(): RP
    {
        return new RP;
    }

    //OneToMeny with Demande
    public function demandes(): array
    {
        return [];
    }

    //OneToMeny with Inscription
    public function inscriptions(): array
    {
        return [];
    }
    // construct function
    public function __construct()
    {
        $this->role = "ROLE_ETUDIANT";
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
}
