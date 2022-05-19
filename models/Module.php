<?php
namespace App\Model;
use App\Core\Model;
class Module extends Model
{
    private int $id;
    private string $name;

    //Navigational functions:

    //MenyToMeny with Professeur
    public function professeurs(): array|null
    {
        $sql = "select p.* from personne p,module m
        where p.id=m.personne_id
        and p.role like 'ROLE_PROFESSEUR'
        and m.id=?";
        return parent::findById($sql, [$this->id]);

    }

    //MenyToOne with RP
    public function rp(): RP
    {
        $sql = "select p.* from personne p,module m
        where p.id=c.personne_id
        and p.role like 'ROLE_RP'
        and m.id=?";
        return parent::findById($sql, [$this->id]);
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table();
        return  parent::findBy($sql);
    }
}
