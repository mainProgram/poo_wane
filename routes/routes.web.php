<?php
    use App\Core\Router;
    use App\Exception\RouteNotFoundException;
    use App\Controller\ClasseController;
    use App\Controller\SecurityController;
    use App\Controller\PersonneController;

    $router = new Router;
    // Chemin relatif SecurityController => use App\Controller\SecurityController;
    // Chemin absolu  App\Controller\SecurityController ou SecurityController::class bi ni il faut use App\Controller\SecurityController;

    // Definition des routes => ajout de routes dans le tableau de routes
    $router->route("/login", ["App\Controller\SecurityController", "authentification"]);
    $router->route("/logout", [SecurityController::class, "deconnexion"]);
    $router->route("/classes", [ClasseController::class, "listerClasse"]);
    $router->route("/classes/add", [ClasseController::class, "creerClasse"]);
    $router->route("/personnes", [PersonneController::class, "listerPersonne"]);

    //Résolution des routes => rechercher si la route est dans le tableau de routes
    try{
        $router->resolve();
    }
    catch(RouteNotFoundException $ex){
        echo $ex->message;
    }