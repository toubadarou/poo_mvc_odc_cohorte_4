<?php
namespace App\model;

use App\core\Model;

abstract class Personne extends Model
{
    protected int $id;
    protected  string $fullName;
    protected static string $role;
    protected static int $nbrPersonne;
    
    // construct function
    public  function __construct()
    {
        // self::$table = "personne";
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
     * Get the value of fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     * @return  self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of nbrPersonne
     */
    public function getNbrPersonne()
    {
        return $this->nbrPersonne;
    }

    /**
     * Set the value of nbrPersonne
     *
     * @return  self
     */
    public function setNbrPersonne($nbrPersonne)
    {
        $this->nbrPersonne = $nbrPersonne;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table();
        echo $sql;
        return  [];
    }
}
