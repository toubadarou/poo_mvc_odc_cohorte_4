<?php
namespace App\Models;
use App\Core\Model;
abstract class Personne extends Model{
     protected int $id;
     protected string $nomComplet;
     protected static string $role;
    //  private static int $nbrePersonne;
	function __construct() {
        
	}
    // Getters
    public function getId():int{
        return $this->id;
    }
    
    public function getNomComplet():string{
        return $this->nomComplet;
    }
    // Setters
    public function setId(int $id):self{
        $this->id = $id;
        return $this;
    }
    public function setNomComplet(string $nomComplet):self{
        $this->nomComplet = $nomComplet;
        return $this;
    } 
    public function getRole()
    {
        return $this->role;
    } 
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    } 
    public function getNbrePersonne()
    {
        return $this->nbrePersonne;
    } 
     public function setNbrePersonne($nbrePersonne)
     {
        $this->nbrePersonne = $nbrePersonne;
        return $this;
     }

}