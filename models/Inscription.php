<?php
    namespace App\Model;
    use App\Core\Model;

    class Inscription extends Model{
        private int $id;
        private int $etudiant_id;
        private int $classe_id;

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
            $sql = "SELECT a.* 
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

        
        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO `inscription` (`classe_id`, `etudiant_id`, `ac_id`, `annee_id`) VALUES (?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->classe_id, $this->etudiant_id, $_SESSION["KEY_USER_CONNECT"]->id, $_SESSION["ANNEE_SCOLAIRE"]]);
            $db->closeConnection();
            return $result;     
        }

      
        public function getEtudiant_id()
        {
            return $this->etudiant_id;
        }

        public function setEtudiant_id($etudiant_id):self
        {
            $this->etudiant_id = $etudiant_id;
            return $this;
        }

        public function getClasse_id()
        {
            return $this->classe_id;
        }

        public function setClasse_id($classe_id):self
        {
            $this->classe_id = $classe_id;
            return $this;
        }
    }