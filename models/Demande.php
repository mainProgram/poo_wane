<?php
    namespace App\Model;

    class Demande{
        private int $id;
        private string $motif;
        private \DateTime $date; //le slash avant cest que quand on est dans php et quon mette \ ca veut dire quon attaque toutes les classes predefinies de php
        
        //many to one avec RP - plusieurs demandes traitees par 1 RP
        public function RP():RP{
            return new RP();
        }

        //many to one avec Etudiant - plusieurs demandes formulees par 1 Etudiant
        public function Etudiant():Etudiant{
            return new Etudiant();
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

        public function getMotif()
        {
            return $this->motif;
        }

        public function setMotif($motif):self
        {
            $this->motif = $motif;
            return $this;
        }

        public function getDate()
        {
            return $this->date;
        }

        public function setDate($date):self
        {
            $this->date = $date;
            return $this;
        }
    }