<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Module;

    class ModuleController extends Controller{
        public function listerModule(){
            $modules = Module::findAll();
            $datas = [
                "modules" => $modules
            ];
            $this->render("module/liste", $datas);
        }
        
        public function ajouterModule(){
            
        }
    }