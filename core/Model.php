<?php
    namespace App\Core;

    class Model implements IModel{
        public static function table():string{
            $table = self::getClass();
            $table = ($table == "Professeur" or $table == "AC" or $table == "RP" or $table == "Etudiant" or $table == "User") ? "personne" : strtolower($table);
            return $table;
        }

        public static function role($role) {
            return  $role;
        }

        //dependance voir diag de classes
        protected static function database():Database{
            return new Database();
        }

        public function insert():int{
            return 0;
        }
        public function update():int{
            return 0;
        }

        public static function get_class_attributes(){
            $ref = new \ReflectionClass(get_called_class());
            foreach($ref->getProperties() as $prop)
            // var_dump($ref->getProperties());die;
                if($prop->getName()[0] != "_") //yima bagna enregistrer
                    $array[] = $prop->getName();
            return $array;
        }

        public static function giveMeTheRole():string{
            $table = "ROLE_".strtoupper(self::getClass());
            return $table;
        }

       
        public static function delete(int $id):int{
            $db = self::database();
            $db->connectionBD();
            //requete préparée, var injectée lors de l'exéxution de la requête, var remplacée par un joker, 1st joker pos -0, 2nd joker pos 1
                $sql = "DELETE FROM ".self::table()." WHERE id = ?";
                $result = $db->executeUpdate($sql, [$id]);
            $db->closeConnection();
            return $result;
        }
        
        public static function findById(int $id):object|null{
            $db = self::database();
            $db->connectionBD();
                $sql = "SELECT * FROM ".self::table()." WHERE id = ?";
                $result = $db->executeSelect($sql, [$id]);
            $db->closeConnection();
            return $result; 
        }

        public static function findBy(string $sql, array $data=null, $single=false):object|null|array{
            $db = self::database();
            $db->connectionBD();
                $result = $db->executeSelect($sql, $data, $single);
            $db->closeConnection();
            return $result; 
        }
        
        public static function getClass(){
            $table = get_called_class();
            $table = str_replace("App\\Model\\", "", $table);
            return $table;
        } 
        
        public static function findAll(string $orderBy = ""):array{
            $orderBy = !empty($orderBy) ? (" ORDER BY ".$orderBy) : "";
            $sql = "SELECT * FROM ".self::table().$orderBy;
            $db = self::database();
            $db->connectionBD();
            $result = $db->executeSelect($sql);
            $db->closeConnection();
            return $result;        
        }

    }
