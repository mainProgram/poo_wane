<?php
    namespace App\Controller;

    use App\Core\Controller;
    use App\Core\Request;

    class SecurityController extends Controller{

        public function authentification(){
            // 1- Formulaire de connexion => GET
            if($this->request->isGet()){
                $this->render("security/login.html.php");
            }

            // 2- Traitement apres soumission = POST
        }


        public function deconnexion(){
            $this->redirectToRoute("login");
        }
    }