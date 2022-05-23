<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\User;

class SecurityController extends Controller
{

    public function authentification()
    {
        // Affichage deu formulaire de connexion => requête GET
        if ($this->request->isGET()) {
            $this->render('security/login');
        }
        // Traitement aprés soumission => requête POST
        if ($this->request->isPOST()) {
            extract($_POST);
            $user = User::findUserByLoginAndPassword($login, $password);
            if ($user != null) {
                switch ($user->role) {
                    case 'ROLE_RP':
                        $this->redirectToRoute("personnes");
                        break;
                    case 'ROLE_AC':
                        $this->redirectToRoute("etudiants");
                        break;
                    case 'ROLE_ETUDIANT':
                        $this->redirectToRoute("classe");
                        break;
                    default:
                        $this->redirectToRoute("login");
                        break;
                }
            } else {
                $this->redirectToRoute("login");
            }
        }
    }
    public function deconnexion()
    {
        unset($_SESSION['user-connect']);
        $this->redirectToRoute("login");
    }
}
