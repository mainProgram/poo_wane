<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // Inclure le fichier de la classe
    // require_once "../core/IModel.php";
    // require_once "../core/Model.php";
    // require_once "../models/Classe.php";
    // require_once "../models/Personne.php";
    // require_once "../models/User.php";
    // require_once "../models/RP.php";
    // require_once "../models/AC.php";
    // require_once "../models/Etudiant.php";
    // require_once "../models/Inscription.php";

    // Créer un objet ou instanciation
    // $pers1 = new Personne(); //appel du constructeur

    //Donner un état à un objet
    // -> : Opérateur de portée d'instance(objet)
    //$pers1 -> Interface de la classe (Tous les attributs et méthodes publics de la classe)
    // $pers1->setId(1);
    // $pers1->setNomComplet("Fa Diop");

    // $pers2 = new Personne(); 
    // $pers2->setId(2);
    // $pers2->setNomComplet("Ady Jallow");

    // echo $pers1->getId();
    // echo $pers1->getNomComplet();

    // Personne::setNbrePersonne(2);
    // echo Personne::getNbrePersonne();

// ---------------------------------------------------
//COMPOSER
//  outil de gestion de dépendance
// gestionnaire : logiciel à installer dont l'objectif est de télécharger une dépendance et de la configurer dans le projet
// dépendance : toutes les classes externes que l'on peut ajouter dans son projet pouur avoir des fonctionnalités supplémentaires
// hub de dépendance : site ou on regroupe ttes les dépendances du langage - php (packagist)
// installation : composer init
// namespace -> package
// a chaque fois que je modifie composer.json je dois faire un composer update
//"autoload": {
//     "psr-4": {
//         //commment tu veux l'appeler : chemin du dossier, App moy melni dossier  racine bi tu peux l'appeler autrement stv
//         "App\\Core": "core/",
//         "App\\Model": "models/",
//         "App\\Controller": "controllers/"
//     }
// },

// toutes les classes de php se trouvent dans le dossier racine, \ : namespace racine \PDO
require '../vendor/autoload.php';

use App\Controller\SecurityController;
use App\Model\Professeur;
use App\Model\User;
use App\Model\AC;

// Professeur::findAll();
// $prof = new Professeur();
// $prof->setNom("Diop");
// $prof->setPrenom("Fama");
// $prof->setGrade("Doctorat");
// // $prof->insert();
// $profs = Professeur::findAll();
// var_dump($profs);

// $ac = new AC();
// $ac->setNom("Bâ");
// $ac->setPrenom("Lamine");
// $ac->setLogin("lamzoba@gmail.com");
// $ac->setPassword("passer");
// // $ac->insert();
// $acs = AC::findAll();
// var_dump($acs);

// $Users = User::findAll();
// var_dump($Users);

require_once "../core/functions.php";
//  dd(User::findUserByLoginAndPassword("soul@gmail.com", "mausi"));

// use App\Core\Request;
// $req = new Request;
// $req->getUri();
// dd($req->isGet());
// dd($req->isPost());
// dd($_SERVER["DOCUMENT_ROOT"]);

require_once "../routes/routes.web.php"; 