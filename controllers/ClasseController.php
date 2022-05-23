<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Classe;

    class ClasseController extends Controller{
     
        public function creerClasse(){
            $datas = [
                "title" => "Formulaire d'ajout de classes"
            ];
            $this->render("classe/add", $datas);
        }

        public function listerClasse(){
            $classes = Classe::findAll();
            $datas = [
                "classes" => $classes
            ];
            $this->render("classe/liste", $datas);
        }
    }