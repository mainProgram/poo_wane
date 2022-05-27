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
        protected string $prenom;
        protected string $nom;

        // Attribut de classes / statique
        protected static int $_nbrePersonne;
        protected static string $role;

        // Methode statique
        public static function getNbrePersonne()
        {
            return self::$_nbrePersonne; //:: opérateur de portée de classe
        }
        public static function setNbrePersonne($nbrePersonne)
        {
           self::$_nbrePersonne = $nbrePersonne; //:: opérateur de portée de classe
        }

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

        public function getPrenom():string {
            return $this->prenom;
        }

        public function setPrenom(string $prenom):self {
            $this->prenom = $prenom;
            return $this;
	    }

        public function getNom():string {
            return $this->nom;
        }

        public function setNom(string $nom):self {
            $this->nom = $nom;
            return $this;
	    }

        public static function findAll(string $orderBy = ""):array{
            $orderBy = !empty($orderBy) ? (" ORDER BY ".$orderBy) : "";
            $db = self::database();
            $db->connectionBD();
            //requete non préparée, var injectée lors de l'écriture de la requête
                $table = self::getClass();
                if($table == "User")
                    $sql = "SELECT * FROM ".self::table()." WHERE etat=1 AND role NOT LIKE 'ROLE_PROFESSEUR'".$orderBy;
                else
                    $sql = "SELECT * FROM ".self::table()." WHERE etat=1 AND role LIKE '".self::giveMeTheRole()."'".$orderBy;
            $result = $db->executeSelect($sql);
            $db->closeConnection();
            return $result;        
        }

        public function insert():int{
            // echo parent::giveMeTheRole();
            // dd(array_reverse(parent::get_class_attributes()));
            // $db = parent::database();
            // $db->connectionBD();
            //     $sql = "INSERT INTO personne (`prenom`, `nom`, `role`, `grade`) VALUES (?, ?, ?, ?)";
            //     $result = $db->executeUpdate($sql, [$this->prenom, $this->nom,  parent::$role,  $this->grade]);
            // $db->closeConnection();
            // return $result;     
            return 0;     
        }
    }