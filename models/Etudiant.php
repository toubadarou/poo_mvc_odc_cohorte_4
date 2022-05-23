<?php
namespace App\Models;
class Etudiant extends User{

    private string $matricule;
    private string $sexe;
    private string $adresse;
    
    public function __construct()
    {
        parent::$role = "ROLE_ETUDIANT";
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
        return $this;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
        public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function inscription():array{
        $sql = "select i.* from inscription i, ".parent::table()." ac
                where i.ac_id = ac.id
                and i.id = ?";
        return parent::findBy($sql,[$this->id]);
    }
    public function demandes():array|null{
        $sql = "select d.* from ".parent::table()." d, etudiant e
                where d.etudiant_id=e.id
                and e.id = ?";
        return parent::findBy($sql,[$this->id]);
    }
    public function insert():int{
        $db = parent::database();
        $db->connexionBD();
            $sql = "INSERT INTO `personne` (`nom_complet`, `role`, `login`, `password`, `matricule`, `sexe`, `adresse`) VALUES (?,?,?,?,?,?,?)";
            $result = $db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password,$this->matricule,$this->sexe,$this->adresse]);
        $db->closeConnexion();
        return $result;
    }
    public static function findAll(): array
    {
        $sql = "select * from ".parent::table()." where role like 'ROLE_ETUDIANT'";
        return parent::findBy($sql,[]);
    } 
    
}