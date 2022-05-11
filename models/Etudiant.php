<?php
    namespace App\Model;

    class Etudiant extends User{
        private string $matricule;
        private string $adresse;
        private string $sexe;
        
        //one to many avec demande - 1 etu plusieurs demandes
        public function demandes():array{
            return [];
        }

        public function getMatricule()
        {
            return $this->matricule;
        }

        public function setMatricule($matricule):self
        {
            $this->matricule = $matricule;
            return $this;
        }

        public function getAdresse()
        {
            return $this->adresse;
        }

        public function setAdresse($adresse):self
        {
            $this->adresse = $adresse;
            return $this;
        }

        public function getSexe()
        {
            return $this->sexe;
        }

        public function setSexe($sexe):self
        {
            $this->sexe = $sexe;
            return $this;
        }
        public static function findAll():array{
            $sql = "SELECT * FROM ".parent::table()." WHERE role LIKE '".parent::role("ROLE_ETUDIANT")."'";
            echo $sql ;
            return [];        
        }
    }