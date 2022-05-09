<?php
class AC extends User
{
    //Navigational attributs 
    //OneToMeny AC=>Inscription
    //private array $inscription;

    //Navigational functions:
    //OneToMeny with Inscription

    public function  inscriptions(): array
    {
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
}
