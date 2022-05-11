<?php
    namespace App\Model;
    use App\Core\Model;

    class Inscription extends Model{
        private int $id;

        //Many to One avec AC | plusieurs insc 1 AC
        public function ac():AC{
            $sql = "SELECT p.* 
                    FROM inscription i, personne p
                    WHERE p.id = i.ac_id
                    AND p.role LIKE 'ROLE_AC'
                    AND i.id = ? ";
            return parent::findBy($sql, [$this->id]);
        }

        //Many to One avec annee
        public function anneeScolaire():Annee{
            $sql = "SELECT p.* 
                    FROM inscription i, annee a
                    WHERE a.id = i.annee_id
                    AND i.id = ?";
            return parent::findBy($sql, [$this->id]);
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