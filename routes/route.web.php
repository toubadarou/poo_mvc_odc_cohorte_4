<?php

use App\Core\Router;
use App\Exception\PageNotFoundException;


$routers = new Router();
//define routers

$routers->route('/', [SecurityController ::class, "welcome"]);
$routers->route('/login', [SecurityController::class, "Authentication"]);
$routers->route('/logout', [SecurityController::class, "deconnexion"]);
$routers->route('/classes', [ClasseController::class, "CreateClass"]);
$routers->route('/ListClass', [ClasseController::class, "ListClass"]);
$routers->route('/AddClassToTeacher', [ClasseController::class, "AddClassToTeacher"]);
//resolving routers
try {
    $routers->resolve();
} catch (PageNotFoundException $ex) {
    echo $ex->message;
}
