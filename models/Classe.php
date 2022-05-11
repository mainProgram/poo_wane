<?php
    namespace App\Model;
    use App\Core\Model;

    class Classe extends Model  {
        private int $id;
        private string $libelle;
        private string $filiere;
        private string $niveau;

        //many to many avec professeur - Approche fonction navigationnelles
        public function professeurs():array|null{
            $sql = "SELECT *... ";
            return parent::findBy($sql, [$this->id]);
        }

        //many to one avec RP - plusieurs classes ajoutees par 1 RP
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

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle):self
        {
            $this->libelle = $libelle;
            return $this;
        }

        public function getFiliere()
        {
            return $this->filiere;
        }

        public function setFiliere($filiere):self
        {
            $this->filiere = $filiere;
            return $this;
        }

        public function getNiveau()
        {
            return $this->niveau;
        }

        public function setNiveau($niveau):self
        {
            $this->niveau = $niveau;
            return $this;
        }
    }










