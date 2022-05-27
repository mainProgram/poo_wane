<?php
    namespace App\Model;

use App\Core\Model;

    class Module extends Model{
        private int $id;
        private string $nom;
        private string $etat;

        //many to many avec professeurs - Approche fonction navigationnelles
         public function professeurs():array{
            return [];
        }

        //many to one avec RP - plusieurs modules ajoutes par 1 RP
        public function RP():RP{
            return new RP();
        }
        
        public function getId()
        {
            return $this->id;
        }
 
        public function setId($id):self
        {
            $this->id = $id;
            return $this;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nom):self
        {
            $this->nom = $nom;
            return $this;
        }

        public function getetat()
        {
            return $this->etat;
        }

        public function setetat($etat):self
        {
            $this->etat = $etat;
            return $this;
        }

        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO `module` (`nom`, `rp_id`) VALUES (?, ?)";
                $result = $db->executeUpdate($sql, [$this->nom, $_SESSION["KEY_USER_CONNECT"]->id]);
            $db->closeConnection();
            return $result;     
        }
    }