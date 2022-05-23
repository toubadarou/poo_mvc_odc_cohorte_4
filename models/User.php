<?php
namespace App\Models;
abstract class User extends Personne{
    protected string $login;
    protected string $password; 
    public function getLogin()
    {
        return $this->login;
    } 
    
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    } 

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    public static function findUserByLoginAndPassword(string $login, string $password):object|null{
        return parent::findBy("select * from personne where login= ? and password= ?",[$login,$password],true);
    }

    public static function findAll(): array
    {
        $sql = "select * from ".parent::table()." where role not like 'ROLE_PROFESSEUR' ";
        return parent::findBy($sql);
    }
}
