<?php
    use App\Core\Router;
    use App\Exception\RouteNotFoundException;
    use App\Controller\ClasseController;
    use App\Controller\EtudiantController;
    use App\Controller\SecurityController;
    use App\Controller\PersonneController;
    use App\Controller\ProfesseurController;
    use App\Controller\DemandeController;
    use App\Controller\ModuleController;
    use App\Controller\UserController;
    use App\Controller\RPController;
    use App\Controller\ACController;
    use App\Controller\AnneeController;

    $router = new Router;
    // Chemin relatif SecurityController => use App\Controller\SecurityController;
    // Chemin absolu  App\Controller\SecurityController ou SecurityController::class bi ni il faut use App\Controller\SecurityController;

    // Definition des routes => ajout de routes dans le tableau de routes
    $router->route("/login", [SecurityController::class, "authentification"]);
    $router->route("/", [SecurityController::class, "authentification"]);
    $router->route("/home", [SecurityController::class, "home"]);
    $router->route("/logout", [SecurityController::class, "deconnexion"]);
    
    $router->route("/details-prof", [ProfesseurController::class, "detailProfesseur"]);
    $router->route("/delete-prof", [ProfesseurController::class, "deleteProfesseur"]);
    $router->route("/edit-prof", [ProfesseurController::class, "editerProfesseur"]);
    $router->route("/add-professeurs", [ProfesseurController::class, "creerProfesseur"]);
    $router->route("/professeurs", [ProfesseurController::class, "listerProfesseur"]);
    
    $router->route("/acs", [ACController::class, "listerAC"]);
    $router->route("/acs/add", [ACController::class, "creerAC"]);

    $router->route("/demandes", [DemandeController::class, "listerDemandes"]);
    $router->route("/mesdemandes", [DemandeController::class, "lister_demandes_etudiant"]);
    $router->route("/formulerdemande", [DemandeController::class, "formuler_demande"]);
    $router->route("/traiter_demande", [DemandeController::class, "traiter_demande"]);
    $router->route("/refuser_demande", [DemandeController::class, "refuser_demande"]);
    
    $router->route("/etudiants", [EtudiantController::class, "listerEtudiant"]);
    $router->route("/inscription", [EtudiantController::class, "creerEtudiant"]);
    
    $router->route("/classes", [ClasseController::class, "listerClasse"]);
    $router->route("/add-classes", [ClasseController::class, "creerClasse"]);

    $router->route("/users", [UserController::class, "listerUser"]);

    $router->route("/modules", [ModuleController::class, "listerModule"]);
    $router->route("/add-modules", [ModuleController::class, "creerModule"]);

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