<?php
require_once('../models/Personne.php');
require_once('../models/User.php');
require_once('../models/AC.php');
require_once('../models/Etudiant.php');
require_once('../models/Professeur.php');
require_once('../models/RP.php');
require_once('../models/Inscription.php');

$ac=new AC();
echo $ac->getRole()."\n";

$rp=new RP();
echo $rp->getRole()."\n";

$etudiant=new Etudiant();
echo $etudiant->getRole()."\n";
$ins= new Inscription();
$ins-> ac();
$ins-> anneescolair();