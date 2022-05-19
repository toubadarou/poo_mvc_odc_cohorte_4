<?php

namespace App\core;
//la liste des constantes
class Constante  
{
    public const WEB_ROOT="http//localhost";
    public static function ROOT()
    {
        return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
    }
}
