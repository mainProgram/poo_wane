<?php
    namespace App\Model;

    class Inscription{
        private int $id;

        //Many to One avec AC | plusieurs insc 1 AC
        public function ac():AC{
            $sql = "SELECT p.* 
                    FROM inscription i, personne p
                    WHERE p.id = i.ac_id
                    AND p.role LIKE 'ROLE_AC'
                    AND i.id =".$this->id;
            return new AC();
        }

        //Many to One avec annee
        public function anneeScolaire():Annee{
            $sql = "SELECT p.* 
                    FROM inscription i, annee a
                    WHERE a.id = i.annee_id
                    AND i.id =".$this->id;
            return new Annee();
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
    }