<?php
namespace App\Model;
use App\Core\Model;
use \DateTime;
class Demande extends Model
{
    private int $id;
    private string $motif;
    private DateTime $date;
    // Navigational functions:
    //MenyToOne with RP
    public function rp(): RP
    {
        return new RP;
    }

    //MenyToOne with Etudiant
    public function etudiant(): Etudiant
    {
        return new Etudiant;
    }

    //MenyToOne with AC
    public function ac(): AC
    {
        return new AC;
    }
    // construct function
    public function __construct()
    {
        $this->table = "demande";
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
     * Get the value of motif
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table();
        return  parent::findBy($sql);
    }
}
