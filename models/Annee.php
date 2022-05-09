<?php
    namespace App\Model;
    use App\Core\Model;

    class Annee extends Model{
        private int $id;
        private string $etat;
        private string $libelle;

        //one to many avec insc
        public function inscriptions():array{
            return [];
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

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle):self
        {
            $this->libelle = $libelle;
            return $this;
        }

        public function getEtat()
        {
            return $this->etat;
        }

        public function setEtat($etat):self
        {
            $this->etat = $etat;
            return $this;
        }
    }