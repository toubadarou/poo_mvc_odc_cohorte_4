<?php

namespace App\Core;

use App\Model\User;


class Session  
{
    private User $user;
    public function __construct()
    {
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
        }
    }
    //add data into the session
    public function setData(string $key,$data)
    {
        $_SESSIONSESSION[$key  ]=$data;
    }
    // Get data fron thr session
    public function getData(string $key)
    {
       return $_SESSION[$key];
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
