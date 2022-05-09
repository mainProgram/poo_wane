<?php
    namespace App\Core;

    class Model implements IModel{
        public static function table():string{
            $table = get_called_class();
            $table = ($table == "User" or $table == "AC" or $table == "RP" or $table == "Etudiant") ? "personne" : strtolower($table);
            return $table;
        }

        public function insert(array $data):int{
            return 0;
        }
        public function update():int{
            return 0;
        }
        public static function delete(int $id):int{
            $sql = "DELETE FROM ".self::table()." WHERE id = $id";
            echo $sql;
            return 0;
        }
        public static function findAll():array{
            $sql = "SELECT * FROM ".self::table();
            echo $sql;
            return [];        
        }
        public static function findById(int $id):object|null{
            $sql = "SELECT * FROM ".self::table()." WHERE id = $id";
            echo $sql;
            return null;
        }
        public static function findBy(string $sql, array $data =null, $single=false):object|null|array{
            return null;
        }
    }