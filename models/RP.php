<?php
class RP extends User
{
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
}
