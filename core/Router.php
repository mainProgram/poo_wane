<?php
    namespace App\Core;

use App\Exception\RouteNotFoundException;

    class Router{ 
        private array $routes; //toutes les routes de l'application seront ici
        private Request $request;

        public function __construct() {
            $this->request = new Request;
        }

        public function route(string $uri, array $action ){
            $this->routes[$uri] = $action ;
        }

        public function resolve(){
            $uri = "/".$this->request->getUri()[0]; // ex: /login

            if(isset($this->routes[$uri])){ //uri existe

                $route = $this->routes[$uri];

                [$ctrlClass, $action] = $route; // or  $ctrlClass = $route[0];  $action = $route[1]; 
                
                if(class_exists($ctrlClass) && method_exists($ctrlClass, $action)){ // verifions si le controller et l'action existent
                    $ctrl = new $ctrlClass($this->request); // ex  : new SecurityController($this->request) --> __construct
                    
                    $ctrl->$action(); // ex: $ctrl->authentification(); or call_user_func(array($ctrl, $action)); //  call_user_func_array() possibilité de donner des paramètres
                }
                else
                {
                    throw new RouteNotFoundException();
                }
            }
            else //page inexistante
            { 
                throw new RouteNotFoundException();
            }
        }
    }