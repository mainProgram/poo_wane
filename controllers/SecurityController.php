<?php
    namespace App\Controller;

use App\Core\Constantes;
use App\Core\Controller;
    use App\Core\Request;
    use App\Model\User;

    class SecurityController extends Controller{

        public function authentification(){
            // 1- Formulaire de connexion => GET
            if($this->request->isGet()){
                $this->render("security/login");
            }
            // 2- Traitement apres soumission = POST
            else{
                extract($_POST);
                if(User::findUserByLoginAndPassword($login, $password))
                    $this->render("home/home");             
                else
                    // $this->render("security/login");
                    header("Location:".Constantes::WEB_ROOT."login");
            }
        }


        public function deconnexion(){
            $this->redirectToRoute("login");
        }
    }