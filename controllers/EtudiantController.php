<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Etudiant;
    use App\Model\Inscription;
    use App\Model\Classe;
    use App\Exception\RouteNotFoundException;

    class EtudiantController extends Controller{
        public function listerEtudiant(){
            $etudiants = Etudiant::findAll();
            $datas = [
                "etudiants" => $etudiants,
                "title" => "Liste des étudiants"
            ];
            $this->render("etudiant/liste", $datas);
        }

        public function creerEtudiant(){
            if($this->request->isGet()){
                $datas = [
                    "title" => "Inscription",
                    "classes" => Classe::findAll()
                ];
                $this->render("etudiant/add", $datas);
            }
            elseif($this->request->isPost()){
                extract($_POST);
                $etudiant = new Etudiant();
                $etudiant->setNom($nom);
                $etudiant->setPrenom($prenom);
                $etudiant->setLogin($login);
                $etudiant->setAdresse($adresse);
                $etudiant->setSexe($sexe);
                $id = $etudiant->insert();

                if($id > 0){
                    $inscription = new Inscription();
                    $inscription->setClasse_id($classe);
                    $inscription->setEtudiant_id($id);
                    $inscription->insert();
                    $matricule = "MAT-".$id;
                    $etudiant->setMatricule($matricule);
                    $etudiant->setId($id);
                    $etudiant->update();
                    $this->redirectToRoute("etudiants");
                }
                else{
                    throw new RouteNotFoundException("Erreur");
                }
            }
        }
    }