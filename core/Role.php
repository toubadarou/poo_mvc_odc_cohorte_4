<?php

namespace App\Core;

use App\Core\Session;


class Role
{
    private Session $session;
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    public function isConnect()
    {
    
    }
    public function isRP()
    {

    }
    public function isAC()
    {
            
    }
    public function isEtudiant()
    {
        
    }
}
