<?php
    namespace App\Model;

    class Professeur extends Personne{
        private string $grade;
        private array $classes;
        private array $modules;

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
                $sql = "INSERT INTO `personne` (`prenom`, `nom`, `grade`, `role`, `rp_id_add_prof`) VALUES (?, ?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->prenom, $this->nom, $this->grade, parent::giveMeTheRole(), $_SESSION["KEY_USER_CONNECT"]->id]);
            $db->closeConnection();
            return $result;     
        }

        public function insertModules(array $tab, $id):int{
            $db = parent::database();
            $db->connectionBD();
                for ($i=0; $i < count($tab); $i++) { 
                    $sql = "INSERT INTO `professeur_module` (`module_id`, `professeur_id`, `rp_id`) VALUES (?, ?, ?)";
                    $result = $db->executeUpdate($sql, [$tab[$i], $id, $_SESSION["KEY_USER_CONNECT"]->id]);
                }
            $db->closeConnection();
            return $result;     
        }

        public function insertClasses(array $tab, $id):int{
            $db = parent::database();
            $db->connectionBD();
                for ($i=0; $i < count($tab); $i++) { 
                    $sql = "INSERT INTO `professeur_classe` (`classe_id`, `professeur_id`, `rp_id` ) VALUES (?, ?, ?)";
                    $result = $db->executeUpdate($sql, [$tab[$i], $id, $_SESSION["KEY_USER_CONNECT"]->id]);
                }
            $db->closeConnection();
            return $result;     
        }

        public function update():int{ 
            $db = parent::database();
            $db->connectionBD();
                $sql = "UPDATE personne SET prenom = ?,  nom = ?, grade = ? WHERE id=?";
                $result = $db->executeUpdate($sql, [$this->prenom, $this->nom, $this->grade, $this->id]);
            $db->closeConnection();
            return $result;   
        }

        public function getClasses()
        {
            return $this->classes;
        }

        public function setClasses($classes):self
        {
            $this->classes = $classes;
            return $this;
        }

        public function getModules()
        {
            return $this->modules;
        }

        public function setModules($modules):self
        {
            $this->modules = $modules;
            return $this;
        }
    }