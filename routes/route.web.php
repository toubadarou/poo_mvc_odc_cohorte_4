<?php

namespace App\route;
use App\core\Router;
use App\exception\RouteNotFoundException;

$routers = new Router();
//define routers
$routers->route('/login', [SecurityController::class, "Authentication"]);
$routers->route('/logout', [SecurityController::class, "deconnexion"]);
$routers->route('/classes', [ClasseController::class, "CreateClass"]);
$routers->route('/login', [ClasseController::class, "ListClass"]);
$routers->route('/login', [ClasseController::class, "AddClassToTeacher"]);
//resolving routers
try {
    $routers->resolve();
} catch (RouteNotFoundException $ex) {
    echo $ex->message;
}
