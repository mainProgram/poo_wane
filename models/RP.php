<?php
    namespace App\Model;

    class RP extends User{
        //one to many prof,  un RP plusieurs ajouts de profs
        //fonctions navigationnelles => fonctions issues des associations
        public function professeurs():array{
            return [];
        }

        //one to many classes,  un RP plusieurs ajouts de classes
        public function classes():array{
            return [];
        }

        //one to many demandes,  un RP plusieurs traitements de demandes
        public function demandes():array{
            return [];
        }
    }