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
       
        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO `personne` (`prenom`, `nom`, `sexe`, `role`, `login`, `password`, `adresse`) VALUES (?, ?, ?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->prenom, $this->nom, $this->sexe, parent::giveMeTheRole(), $this->login, "passer", $this->adresse]);
            $db->closeConnection();
            return $result;     
        }

        public function update():int{ 
            $db = parent::database();
            $db->connectionBD();
                $sql = "UPDATE personne SET matricule = ? WHERE id=?";
                $result = $db->executeUpdate($sql, [$this->matricule, $this->id]);
            $db->closeConnection();
            return $result;   
        }

    }