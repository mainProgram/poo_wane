<?php

    namespace App\Model;

    class AC extends User{
        //attributs navigationnels => attributs issus des associations
        //one to many inscription,  un attache plusieurs inscriptions
        //premiere approche
        private array $inscriptions;

        //2eme approche
        //fonctions navigationnelles => fonctions issues des associations
        public function inscriptions():array{
            return [];
        }
        public function __construct() {
            $this->inscription = [];
        }
        public static function findAll():array{
            $sql = "SELECT * FROM ".parent::table()." WHERE role LIKE 'ROLE_AC'";
            echo $sql;
            return [];        
        }
    }