<?php

namespace App\Model;

use App\Core\Model;


class AnneeScolaire extends Model
{
    protected int $id;
    protected string $libelleAnnee;
    protected static string $table = "annee_scolaire";


    //Navigational functions:
    //OneToMeny with Inscription
    public function  inscriptions(): array|null
    {
        $sql = "select i.* from inscription i,annee_scolaire a
        where i.id=a.inscription_id
        and a.id=?";
        return parent::findById($sql, [$this->id]);
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
    public static function findAll(): array
    {
        $sql = "select * from annee_scolaire" ;
        return  parent::findBy($sql);
    }
}

