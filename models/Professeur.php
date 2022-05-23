<?php
    namespace App\Model;

    class Professeur extends Personne{
        private string $grade;

        //many to many avec classe - Approche fonction navigationnelles
        public function classes():array{
            return [];
        }

        //many to many avec modules - plusieurs modules plusieurs profs
        public function modules():array{
            return [];
        }

        //many to one avec RP - plusieurs profs ajoutes par 1 RP
         public function RP():RP{
            return new RP();
        }

        public function getGrade()
        {
            return $this->grade;
        }

        public function setGrade($grade):self
        {
            $this->grade = $grade;
            return $this;
        }

        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO `personne` (`prenom`, `nom`, `grade`, `role`) VALUES (?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->prenom, $this->nom, $this->grade, parent::giveMeTheRole()]);
            $db->closeConnection();
            return $result;     
        }
    }