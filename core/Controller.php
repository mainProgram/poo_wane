<?php
    namespace App\Core;

    class Controller{
        protected Request $request;


        //Injection de le request dans le controller
        public function __construct(Request $request) {
            $this->request = $request;
        }

        //Chargement des vues
        public function render(string $path, array $datas=[]){
            $datas["Constantes"] = Constantes::class;
            $datas["request"] = $this->request;
            //dans une vue si on veut acccèder aux constantes on met $Constantes
            ob_start();
                extract($datas);
                require_once(Constantes::ROOT()."templates".DIRECTORY_SEPARATOR.$path.".html.php");
            $content_for_views = ob_get_clean();
            require_once(Constantes::ROOT()."templates".DIRECTORY_SEPARATOR."layout".DIRECTORY_SEPARATOR."base.html.php");
        }


        public function redirectToRoute($uri){ //quitter dune action dun controller a une autre action
            header("Location:".Constantes::WEB_ROOT.$uri);
        }
    }