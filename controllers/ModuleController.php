<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Module;

    class ModuleController extends Controller{
        public function listerModule(){
            $modules = Module::findAll();
            $datas = [
                "modules" => $modules,
                "title" => "Liste des modules"
            ];
            $this->render("module/liste", $datas);
        }
        
        public function creerModule(){
            if($this->request->isGet()){
                $datas = [
                    "title" => "Ajout de modules"
                ];
                $this->render("module/add", $datas);
            }elseif($this->request->isPost()){
                extract($_POST);
                $module = new Module();
                $module->setNom($nom);
                $module->insert();
                $this->redirectToRoute("modules");
            }
        }
    }