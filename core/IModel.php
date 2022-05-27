<?php
    namespace App\Core;

    interface IModel{
        //Methodes abstraites
        //Methodes d'instance
        public function update():int;
        public function insert():int;
        //Methodes statiques
        public static function findAll(string $orderBy = ""):array;
        public static function delete(int $id, string $table):int;
        public static function findById(int $id):object|null;
        public static function findBy(string $sql, array $data =[], $single=false):object|null|array;
    }