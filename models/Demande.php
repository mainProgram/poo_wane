<?php
    namespace App\Model;

use App\Core\Model;

    class Demande extends Model{
        private  $id;
        private string $motif;
        private string $detail;
        private string $traitement;
        private \DateTime $date; //le slash avant cest que quand on est dans php et quon mette \ ca veut dire quon attaque toutes les classes predefinies de php
        
        //many to one avec RP - plusieurs demandes traitees par 1 RP
        public function RP():RP{
            return new RP();
        }

        //many to one avec Etudiant - plusieurs demandes formulees par 1 Etudiant
        public function Etudiant():Etudiant|array{
            $sql = "SELECT p.* 
            FROM demande d, personne p
            WHERE d.etudiant_id = p.id
            AND p.role LIKE 'ROLE_ETUDIANT'
            AND d.id = ? ";
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

        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO `demande` (`motif`, `detail`, `etudiant_id`) VALUES (?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->motif, $this->detail, $_SESSION["KEY_USER_CONNECT"]->id]);
            $db->closeConnection();
            return $result;     
        }

        public function update():int{ 
            $db = parent::database();
            $db->connectionBD();
                $sql = "UPDATE demande SET traitement = ?, rp_id = ? WHERE id=?";
                $result = $db->executeUpdate($sql, [$this->traitement, $_SESSION["KEY_USER_CONNECT"]->id, $this->id]);
            $db->closeConnection();
            return $result;   
        }

        public function getDetail()
        {
            return $this->detail;
        }

        public function setDetail($detail):self
        {
            $this->detail = $detail;
            return $this;
        }

        public function getTraitement()
        {
            return $this->traitement;
        }

        public function setTraitement($traitement):self
        {
            $this->traitement = $traitement;
            return $this;
        }
    }