<?php

namespace App\Core;
use App\Models\User;

class Session{
    private User $user;

    public function __construct()
    {
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    //Permet d'ajouter une donnée dans la session
    public function set(string $key, $data){
        $_SESSION[$key] = $data;
    }
    public function get(string $key){
        return $_SESSION[$key];
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    public static function is_connect():bool{
        return isset($_SESSION['user-connect']);
    }
}