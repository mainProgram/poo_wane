<?php
    namespace App\Core;

    class Request{

        public function getUri(){ //tout ce qui suit le localhost après le port est called l'uri
            $url = explode("/", $_SERVER["REQUEST_URI"]);
            unset($url[0]); //dont need the first value
            return (array_values($url)); //array_values permet de réinitialiser les index d'un tableau
        }

        public function isGet():bool{
            return $_SERVER["REQUEST_METHOD"] == "GET";
        }

        public function isPost():bool{
            return $_SERVER["REQUEST_METHOD"] == "POST";
        }
    }