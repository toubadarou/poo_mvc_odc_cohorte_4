<?php
class Professeur extends User
{
    private string $grade;

    //Navigational functions:

    //MenyToMeny with Classe
    public function professeurs(): array
    {
        return [];
    }

    //MenyToMeny with Module
    public function modules(): array
    {
        return [];
    }

    //MenyToOne with RP
    public function rp(): RP
    {
        return new RP;
    }
    public function __construct()
    {
        $this->role = "ROLE_PROFESSEUR";
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
