<?php
    use App\Core\Router;
    use App\Exception\RouteNotFoundException;
    use App\Controller\ClasseController;
    use App\Controller\EtudiantController;
    use App\Controller\SecurityController;
    use App\Controller\PersonneController;
    use App\Controller\ProfesseurController;
    use App\Controller\ModuleController;
    use App\Controller\UserController;
    use App\Controller\RPController;
    use App\Controller\AnneeController;

    $router = new Router;
    // Chemin relatif SecurityController => use App\Controller\SecurityController;
    // Chemin absolu  App\Controller\SecurityController ou SecurityController::class bi ni il faut use App\Controller\SecurityController;

    // Definition des routes => ajout de routes dans le tableau de routes
    $router->route("/login", ["App\Controller\SecurityController", "authentification"]);
    $router->route("/", ["App\Controller\SecurityController", "authentification"]);
    $router->route("/logout", [SecurityController::class, "deconnexion"]);
    
    $router->route("/professeurs/add", [ProfesseurController::class, "creerProfesseur"]);
    $router->route("/professeurs", [ProfesseurController::class, "listerProfesseur"]);
    $router->route("/etudiants", [EtudiantController::class, "listerEtudiant"]);
    $router->route("/etudiants/add", [EtudiantController::class, "creerEtudiant"]);
    $router->route("/classes", [ClasseController::class, "listerClasse"]);
    $router->route("/classes/add", [ClasseController::class, "creerClasse"]);
    $router->route("/users", [UserController::class, "listerUser"]);
    $router->route("/modules", [ModuleController::class, "listerModule"]);
    $router->route("/modules/add", [ModuleController::class, "creerModule"]);
    $router->route("/rps", [RPController::class, "listerRP"]);
    $router->route("/rps/add", [RPController::class, "creerRP"]);
    $router->route("/annees", [AnneeController::class, "listerAnnee"]);
    $router->route("/annees/add", [AnneeController::class, "creerAnnee"]);
    
    //Résolution des routes => rechercher si la route est dans le tableau de routes
    try{
        $router->resolve();
    }
    catch(RouteNotFoundException $ex){
        echo $ex->message;
    }