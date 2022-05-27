<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Classe;

    class ClasseController extends Controller{
     
        public function creerClasse(){
            if($this->request->isGet()){
                $datas = [
                    "title" => "Ajout de classes"
                ];
                $this->render("classe/add", $datas);
            }
            elseif($this->request->isPost()){
                dd($_POST);
                extract($_POST);
                $classe = new Classe();
                $classe->setLibelle($libelle);
                $classe->setFiliere($filiere);
                $classe->setNiveau($niveau);
                $classe->insert();
                $this->redirectToRoute("classes");
            }
        }

        public function listerClasse(){
            $classes = Classe::findAll();
            $datas = [
                "classes" => $classes,
                "title" => "Liste des classes"
            ];
            $this->render("classe/liste", $datas);
        }
    }