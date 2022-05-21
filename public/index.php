<?php


require_once("../vendor/autoload.php");
require_once("../routes/route.web.php");
require_once("../core/functions.php");
use App\model\Personne;
use App\model\Professeur;
use App\Model\User;

use function App\core\dd;

//The requests
$perso=User::findAll();
dd($perso);

