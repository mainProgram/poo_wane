<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Module;
    use App\Model\Classe;
    use App\Model\Professeur;
    use App\Exception\RouteNotFoundException;

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
            if($this->request->isGet()){
                $datas = [
                    "modules" => Module::findAll(),
                    "classes" => Classe::findAll(),
                    "title" => "Ajout de professeurs"
                ];
                $this->render("professeur/add", $datas);
            }
            else if($this->request->isPost())
            {
                extract($_POST);
                $prof = new Professeur();
                $prof->setNom($nom);
                $prof->setPrenom($prenom);
                $prof->setGrade($grade);
                $prof->setClasses($classes);
                $id = $prof->insert();
                if($id > 0){
                    $prof->insertModules($modules, $id);
                    $prof->insertClasses($classes, $id);
                    $this->redirectToRoute("professeurs");
                }else{
                    throw new RouteNotFoundException("Erreur");
                }
            }
        }

        public function affecterClasse(){
            
        }

        public function detailProfesseur($id){
            $sql = "SELECT m.*, p.nom, p.prenom
                    FROM personne p, professeur_module pm, module m
                    WHERE p.id = pm.professeur_id
                    AND pm.module_id = m.id
                    AND p.id =".$id;
            $modules = Professeur::findBy($sql);
            $sql = "SELECT c.*, p.nom, p.prenom
                    FROM personne p, professeur_classe pc, classe c
                    WHERE p.id = pc.professeur_id
                    AND pc.classe_id = c.id
                    AND p.id =".$id;
            $classes =  Professeur::findBy($sql);
            dd($modules);
            dd($classes);
        }

        public function editerProfesseur($id){
            if($this->request->isGet()){
                $sql = "SELECT * FROM personne WHERE id=".$id;
                $infos = Professeur::findBy($sql);
                $datas = [
                    "title" => "Formulaire d'édition",
                    "infos" => $infos,
                    "modules" => Module::findAll(),
                    "classes" => Classe::findAll(),
                    "classesProf"=> Professeur::findBy("SELECT c.*
                                                        FROM personne p, professeur_classe pc, classe c
                                                        WHERE p.id = pc.professeur_id
                                                        AND pc.classe_id = c.id
                                                        AND p.id =".$id),
                    "modulesProf"=> Professeur::findBy("SELECT m.*
                                                        FROM personne p, professeur_module pm, module m
                                                        WHERE p.id = pm.professeur_id
                                                        AND pm.module_id = m.id
                                                        AND p.id =".$id)
                ];
                $this->render("professeur/edit", $datas);
            }
            elseif($this->request->isPost()){
                extract($_POST);
                $prof = new Professeur();
                $prof->setNom($nom);
                $prof->setPrenom($prenom);
                $prof->setGrade($grade);
                $prof->setId($id);
                $prof->update();
                $this->redirectToRoute("professeurs");
            }
        }

        public function deleteProfesseur($id){
            Professeur::delete($id, "personne");
        }
    }