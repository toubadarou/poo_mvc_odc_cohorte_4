<?php
namespace App\Core;

use App\Core\Router;
use App\Controller\ACController;
use App\Controller\RpController;
use App\Controller\ClasseController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

$router = new Router;
// $request = new Request;
// Définition des routes => Ajout des routes dans le tableau des routes
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classe',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/acs',[ACController::class,"listerAC"]);
$router->route('/etudiants',[EtudiantController::class,"lister"]);
$router->route('/rps',[RpController::class,"lister"]);
$router->route('/professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/add-professeur',[ProfesseurController::class,"ajouterProfesseur"]);
$router->route('/add-rp',[RpController::class,"ajouterRp"]);
$router->route('/add-ac',[ACController::class,"ajouterAC"]);
$router->route('/add-etudiant',[EtudiantController::class,"ajouterEtudiant"]);

// Résolutin des routes => recherche de route dans le tableau des routes
try {
    $router->resolve();
} catch (RouteNotFoundException $th) {
    //throw $th;
    echo $th->message;
}