<?php
    namespace App\Controller;

use App\Core\Constantes;
use App\Core\Controller;
    use App\Core\Request;
    use App\Core\Session;
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
                $user = User::findUserByLoginAndPassword($login, $password);
                $session = new Session();
                if($user){
                    $session->set("KEY_USER_CONNECT", $user);
                    $_SESSION["ANNEE_SCOLAIRE"] = 2;
                    /* $this->render("home/home");  bakhoul deh*/   
                    $this->redirectToRoute("home");
                }
                else{
                    $session->set("error", "Login et/ou mot de passe incorrect(s) !");
                    $this->redirectToRoute("login");
                }
            }
        }

        public function home(){
            $this->render("home/home");
        }

        public function deconnexion(){
            $session = new Session();
            $session->destroy("KEY_USER_CONNECT");
            $this->redirectToRoute("login");
        }
    }