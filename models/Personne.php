<?php
    namespace App\Model;
    use App\Core\Model;

//Classe concrète on connait sa def, elle n'a que des méthodes concrètes
//Classe abstraite on ne connait pas sa definition, elle peut avoir des méthodes concrètes et abstraites, elle est non instantiable
//Classe finale : elle ne peuvent pas avoir de classes filles.

    abstract class Personne extends Model{
        // Attributs d'instances
        protected int $id;
        protected string $etat;
        protected string $nomComplet;

        // Attribut de classes / statique
        protected static int $nbrePersonne;
        protected static string $role;

        // Methode statique
        public static function getNbrePersonne()
        {
            return self::$nbrePersonne; //:: opérateur de portée de classe
        }
        public static function setNbrePersonne($nbrePersonne)
        {
           self::$nbrePersonne = $nbrePersonne; //:: opérateur de portée de classe
        }

        //contructeur par defaut
        // public function __construct() {
        //     self::$table = "personne";
        // }

        // Getters et setters
        public function getId():int {
            return $this->id;
        }

        public function setId(int $id):self {
            $this->id = $id;
            return $this; //permet de faire ceci  
            //  $pers2->setId(2)
            //          setNomComplet("Ady Jallow");
        }

        public function getNomComplet():string {
            return $this->nomComplet;
        }

        public function setNomComplet(string $nomComplet):self {
            $this->nomComplet = $nomComplet;
            return $this;
	    }
    }