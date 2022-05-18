<?php
require("../vendor/autoload.php");

use App\model\Professeur;







// $ac=new AC();
// echo $ac->getRole()."\n";

// $rp=new RP();
// echo $rp->getRole()."\n";

// $etudiant=new Etudiant();
// echo $etudiant->getRole()."\n";
// $ins= new Inscription();
// $ins-> ac();
// $ins-> anneescolair();
$prof=new Professeur;
$prof->setFullName("mbacke diop");
$prof->setGrade("ingénieur");
$prof->insert();
// $det=new Database();
// $det->connexionDB();
// $det->excuteSelect("select * from personne");
// echo "je marche ";
// try {
//     $dbh = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
//     echo "je passe";
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die("je ne passe pas");
// }
// Professeur::findAll();
// $prof->findAll();
/*class Connection
{
    private  $server = "mysql:host=localhost;dbname=test";
    private  $user = "root";
    private  $pass = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $con;

    public function openConnection()
    {
        try {
            die("There is no problem in connection:");
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);

            return $this->con;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
    public function closeConnection()
    {
        $this->con = null;
    }
}*/