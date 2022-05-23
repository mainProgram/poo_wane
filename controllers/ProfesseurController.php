<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\Professeur;

    class ProfesseurController extends Controller{

        public function listerProfesseur(){
            $profs = Professeur::findAll("grade");
            $datas = [
                "profs" => $profs,
                "title" => "Liste des professeurs"
            ];
            $this->render("professeur/liste", $datas);
        }

        public function creerProfesseur(){
            $datas = [
                "title" => "Formulaire d'ajout de professeurs"
            ];
            if($this->request->isGet())
                $this->render("professeur/add", $datas);
            else if($this->request->isPost())
            {
                extract($_POST);
                $prof = new Professeur();
                $prof->setNom($nom);
                $prof->setPrenom($prenom);
                $prof->setGrade($grade);
                $prof->insert();
                $this->listerProfesseur();
            }
        }


        public function affecterClasse(){
            
        }
    }