<?php
    namespace App\Core;

use App\Exception\RouteNotFoundException;
use App\Controller\SecurityController;
use App\Core\Session;

    class Router{ 
        private array $routes; //toutes les routes de l'application seront ici
        private Request $request;

        public function __construct() {
            $this->request = new Request;
        }

        public function route(string $uri, array $action ){
            $this->routes[$uri] = $action ;
        }

        // public function resolve(){
        //     // dd($this->routes);
        //     $uri = "/".$this->request->getUri()[0]; // ex: /login
        //     $params = ($this->request->getUri());
        //     $paramsArray = [];
        //     for ($i=1; $i < count($params); $i++) { 
        //         $paramsArray[] = $params[$i];
        //     }

        //     if(isset($this->routes[$uri])){ //uri existe
        //         if(count($paramsArray) == 0){
        //             $route = $this->routes[$uri];
    
        //             [$ctrlClass, $action] = $route; // or  $ctrlClass = $route[0];  $action = $route[1]; 
                    
        //             if(class_exists($ctrlClass) && method_exists($ctrlClass, $action)){ // verifions si le controller et l'action existent
        //                 $ctrl = new $ctrlClass($this->request); // ex  : new SecurityController($this->request) --> __construct
                        
        //                 // $ctrl->$action(); // ex: $ctrl->authentification(); or call_user_func(array($ctrl, $action)); //  call_user_func_array() possibilité de donner des paramètres
        //                 call_user_func(array($ctrl, $action));
        //             }
        //             else
        //                 throw new RouteNotFoundException();
        //         }
        //         else{
        //             $uri2 = $uri."/".$paramsArray[0];
        //             $route = $this->routes[$uri2];
        //             [$ctrlClass, $action] = $route; // or  $ctrlClass = $route[0];  $action = $route[1]; 
        //             if(class_exists($ctrlClass) && method_exists($ctrlClass, $action)){ // verifions si le controller et l'action existent
        //                 $ctrl = new $ctrlClass($this->request); // ex  : new SecurityController($this->request) --> __construct
                        
        //                 // $ctrl->$action(); // ex: $ctrl->authentification(); or call_user_func(array($ctrl, $action)); //  call_user_func_array() possibilité de donner des paramètres
        //                 call_user_func(array($ctrl, $action));
        //             }
        //             else
        //                 throw new RouteNotFoundException();
        //         }
        //     }
        //     else //page inexistante
        //     { 
        //         throw new RouteNotFoundException();
        //     }
        // }

        public function resolve(){
            $uri = "/".$this->request->getUri()[0]; // ex: /login
            $params = $this->request->getUri();
            unset($params[0]);
            $params = count($params) >= 1  ? array_values($params) : [];
            // dd($params);

            if(isset($this->routes[$uri])){ //uri existe

                $route = $this->routes[$uri];

                [$ctrlClass, $action] = $route; // or  $ctrlClass = $route[0];  $action = $route[1]; 
                
                if(class_exists($ctrlClass) && method_exists($ctrlClass, $action)){ // verifions si le controller et l'action existent
                    $ctrl = new $ctrlClass($this->request); // ex  : new SecurityController($this->request) --> __construct  
                    //$ctrl->$action(); // ex: $ctrl->authentification(); or call_user_func(array($ctrl, $action)); //  call_user_func_array() possibilité de donner des paramètres
                    //On définit les vues accessible sans connextion
                    $free = ["SecurityController/authentification", "*"];
                    $freeTest = explode("\\", $ctrlClass)[2]."/".$action;
                    // var_dump($ctrl, $action,$params);
                    if(in_array($freeTest, $free))
                    {
                        call_user_func_array([$ctrl, $action], $params);
                    }
                    elseif(Session::is_connect())
                    {
                        call_user_func_array([$ctrl, $action], $params);#
                    }
                    else{
                      throw new RouteNotFoundException();
                    }
                }
            }
            else //page inexistante
            { 
                throw new RouteNotFoundException();
            }
    }
    }